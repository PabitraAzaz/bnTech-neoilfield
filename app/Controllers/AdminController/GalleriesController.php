<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Models\GalleriesModel;
use CodeIgniter\HTTP\ResponseInterface;

class GalleriesController extends BaseController
{
    public function index()
    {
        $galModel = new GalleriesModel;
        $galData = $galModel->findAll();

        return view('admin/galleries/index', ['gal' => $galData]);
    }








    public function create()
    {
        helper('form');
        $session = session();

        if ($this->request->getMethod() === 'GET') {
            return view('admin/galleries/create');
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

                    ]
                )

            ) {



                $servicesModel = new GalleriesModel();

                $mainFile = $this->request->getFile('service_image');
                $mainFileName = null;
                if ($mainFile && $mainFile->isValid() && !$mainFile->hasMoved()) {
                    $ext = $mainFile->getClientExtension();
                    $mainFileName = 'Service_' . time() . '.' . $ext;
                    $mainFile->move('uploads/gallery_image/', $mainFileName);
                }



                $result = $servicesModel->save([
                    'gal_image' => $mainFileName,

                    'title' => $this->request->getPost('title'),

                ]);


                if ($result) {

                    $session->setFlashdata('msg', ["msg" => 'You have successfully added a Image to Gallery', "type" => "success"]);

                    return redirect()->to(site_url("admin/galleries"));
                } else {

                    $session->setFlashdata('invalid_creds', ["errors" => ['value_err' => $result['msg']], "type" => "warning"]);

                    return redirect()->to(site_url("admin/galleries/create"));
                }
            } else {


                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->back()->withInput();
            }
        }
    }







    public function delete($id)
    {
        $session = session();
        $servModel = new GalleriesModel();

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
        if (!empty($service['gal_image'])) {
            $imagePath = 'uploads/gallery_image/' . $service['gal_image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the record from database
        $servModel->delete($id);

        $session->setFlashdata('msg', [
            'msg' => 'Successfully Deleted the Image',
            'type' => 'success'
        ]);
        return redirect()->to(base_url('admin/services'));
    }
}
