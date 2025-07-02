<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Models\ServicesModel;
use CodeIgniter\HTTP\ResponseInterface;

class ServicesController extends BaseController
{
    public function index()
    {
        $servicesModel = new ServicesModel();
        $servicesDetails = $servicesModel->findAll();


        // echo '<pre>';
        // print_r($servicesDetails);
        // exit;

        return view('admin/services/index', ['serviceD' => $servicesDetails]);
    }






    public function create()
    {
        helper('form');
        $session = session();

        if ($this->request->getMethod() === 'GET') {
            return view('admin/services/create');
        } else {

            $image = \Config\Services::image();

            // echo '<pre>';
            // print_r($_POST);
            // exit;


            if (

                $this->validate(
                    [
                        'service_image' => 'uploaded[service_image]|is_image[service_image]|mime_in[service_image,image/jpg,image/jpeg,image/png,image/webp]|max_size[service_image, 2048]',

                        'title' => 'required|max_length[124]',
                        'description' => 'required',
                        'why_choose' => 'permit_empty',
                        'other_info' => 'permit_empty',


                    ],

                    [
                        'service_image' => [
                            'uploaded' => 'Please upload a Service image',
                            'is_image' => 'Please upload a valid Service image',
                            'mime_in' => 'Please upload a valid image type of Service Image',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Service Image'
                        ],

                        'title' => [
                            'required' => 'Please fill Service Title',
                            'max_length' => 'Service Title is too large'
                        ],
                        'description' => [
                            'required' => 'Please fill Product Description',
                        ],
                    ]
                )

            ) {



                $servicesModel = new ServicesModel();

                $mainFile = $this->request->getFile('service_image');
                $mainFileName = null;
                if ($mainFile && $mainFile->isValid() && !$mainFile->hasMoved()) {
                    $ext = $mainFile->getClientExtension();
                    $mainFileName = 'Service_' . time() . '.' . $ext;
                    $mainFile->move('uploads/service_image/', $mainFileName);
                }



                $result = $servicesModel->save([
                    'service_image' => $mainFileName,

                    'title' => $this->request->getPost('title'),
                    'description' => $this->request->getPost('description'),
                    'why_choose' => $this->request->getPost('why_choose'),
                    'other_info' => $this->request->getPost('other_info'),
                ]);


                if ($result) {

                    $session->setFlashdata('msg', ["msg" => 'You have successfully added a Service', "type" => "success"]);

                    return redirect()->to(site_url("admin/services"));
                } else {

                    $session->setFlashdata('invalid_creds', ["errors" => ['value_err' => $result['msg']], "type" => "warning"]);

                    return redirect()->to(site_url("admin/services/create"));
                }
            } else {




                // echo '<pre>';
                // print_r($this->validator->getErrors());
                // exit;


                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->back()->withInput();
            }
        }
    }




    public function edit($id)
    {
        helper('form');

        $session = session();
        $servModel = new ServicesModel();

        if ($this->request->getMethod() === 'GET') {
            $servD = $servModel->select()->where('id', $id)->first();
            return view('admin/services/edit', ['serviceDetails' => $servD]);
        } else {
            $image = \Config\Services::image();
            $serviceDetails = $servModel->where('id', $id)->first(); // Get old data


            if (

                $this->validate(
                    [
                        'service_image' => 'is_image[service_image]|mime_in[service_image,image/jpg,image/jpeg,image/png,image/webp]|max_size[service_image, 2048]',
                        'title' => 'required|max_length[124]',
                        'description' => 'required',
                        'why_choose' => 'permit_empty',
                        'other_info' => 'permit_empty',
                    ],

                    [
                        'service_image' => [
                            'uploaded' => 'Please upload a Service image',
                            'is_image' => 'Please upload a valid Service image',
                            'mime_in' => 'Please upload a valid image type of Service Image',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Service Image'
                        ],

                        'title' => [
                            'required' => 'Please fill Service Title',
                            'max_length' => 'Service Title is too large'
                        ],
                        'description' => [
                            'required' => 'Please fill Product Description',
                        ],
                    ]
                )

            ) {

                $file = $this->request->getFile("service_image");


                // if new image then delete old one and add new one as above way...otherwise dont update the database
                $file = $this->request->getFile('service_image');
                $mainFileName = $serviceDetails['service_image']; // Keep old image by default

                if ($file && $file->isValid() && !$file->hasMoved()) {
                    // Delete old image
                    $oldImagePath = 'uploads/service_image/' . $serviceDetails['service_image'];
                    if (!empty($serviceDetails['service_image']) && file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }

                    // Upload new image
                    $ext = $file->getClientExtension();
                    $mainFileName = 'Service_' . time() . '.' . $ext;
                    $file->move('uploads/service_image/', $mainFileName);
                }

                // Update database
                $servModel->update($id, [
                    'title' => $this->request->getPost('title'),
                    'description' => $this->request->getPost('description'),
                    'why_choose' => $this->request->getPost('why_choose'),
                    'other_info' => $this->request->getPost('other_info'),
                    'service_image' => $mainFileName
                ]);

                $session->setFlashdata('success', 'Service updated successfully!');
                return redirect()->to(base_url('admin/services'));
            } else {
                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->back()->withInput();
            }
        }
    }


    public function delete($id)
    {
        $session = session();
        $servModel = new ServicesModel();

        // Fetch the service record
        $service = $servModel->where('id', $id)->first();

        if (!$service) {
            $session->setFlashdata('invalid_creds', [
                'errors' => ['Service not found'],
                'type' => 'danger'
            ]);
            return redirect()->back();
        }

        // Delete image file if it exists
        if (!empty($service['service_image'])) {
            $imagePath = 'uploads/service_image/' . $service['service_image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the record from database
        $servModel->delete($id);

        $session->setFlashdata('msg', [
            'msg' => 'Successfully Deleted the Product',
            'type' => 'success'
        ]);
        return redirect()->to(base_url('admin/services'));
    }
}
