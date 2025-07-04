<?php

namespace App\Controllers;

use App\Models\GalleriesModel;
use App\Models\MessagesMOdel;
use App\Models\ServicesModel;
use App\Models\UserModel;


class Home extends BaseController
{
    public function index(): string
    {
        return view('web/home', ($this->data));
    }

    public function services(): string
    {
        return view('web/services', ($this->data));
    }



    public function single_services($id)
    {
        $serviceModel = new ServicesModel();
        $serviceD = $serviceModel->where('id', $id)->first();
        // $this->data['serviceD'] = $serviceD;


        // echo '<pre>';
        // print_r($serviceD);
        // exit;



        $allS = $serviceModel->select('id, title')->findAll();



        return view('web/single_products', ['service_menu_data' => $this->data['service_menu_data'], 'serviceD' => $serviceD, 'allS' => $allS]);
    }





    public function gallery()
    {

        $galModel = new GalleriesModel;
        $galD = $galModel->select('id,gal_image,title')->findAll();


        return view('web/gallery', ['service_menu_data' => $this->data['service_menu_data'], 'gal' => $galD]);
    }


    public function about_us()
    {
        return view('web/about', ($this->data));
    }

    public function contact_us()
    {
        $session = session();

        if ($this->request->getMethod() === 'GET') {
            return view('web/contact', ($this->data));
        } else {

            // echo '<pre>';
            // print_r($_POST);
            // exit;

            if ($this->validate(
                [

                    'firstn' => 'required|max_length[255]',
                    'email' => 'required|valid_email|max_length[124]',
                    'phone' => 'required',
                    'subject' => 'required',
                    'message' => 'permit_empty'


                ],
                [

                    'firstn' => [
                        'required' => 'Please fill password',
                        'max_length' => 'Name is too large'

                    ],
                    'email' => [
                        'required' => 'Please fill Email',
                        'valid_email' => 'Please use valid Email',
                        'max_length' => 'Email is too large'
                    ],



                    'phone' => [
                        'required' => 'Please fill phone number',
                    ],


                    'subject' => [
                        'required' => 'Please fill subject',

                    ],


                ]
            )) {





                // $name = $this->request->getPost('firstn');
                // $email = $this->request->getPost('email');
                // $phone = $this->request->getPost('phone');
                // $subject = $this->request->getPost('subject');
                // $message = $this->request->getPost('message');

                $messageModel = new MessagesMOdel();




                $result = $messageModel->save([
                    'name' => $this->request->getPost('firstn'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
                    'subject' => $this->request->getPost('subject'),
                    'message' => $this->request->getPost('message'),
                ]);

                if ($result) {
                    $session->setFlashdata('msg', ["msg" => 'Your message was sent, thank you! We will contact you soon.', "type" => "success"]);
                    return redirect()->to(site_url("contact-us"));
                } else {
                    $session->setFlashdata('invalid_creds',  ["errors" => ['value_err' => $result['msg']], "type" => "warning"]);
                    return redirect()->to(site_url("contact-us"));
                }
            } else {
                // echo 'not validate || ';

                $session->setFlashdata('invalid_creds', [
                    "errors" => $this->validator->getErrors(),
                    "type" => "danger"
                ]);
                return redirect()->back()->withInput();
            }
        }
    }



    public function login()
    {
        $session = session();

        if ($this->request->getMethod() === 'GET') {
            return view('web/login');
        } elseif ($this->request->getMethod() === 'POST') {


            if ($this->validate(
                [

                    'email' => 'required|valid_email|max_length[124]',
                    'password' => 'required|max_length[13]',
                ],
                [
                    'email' => [
                        'required' => 'Please fill Email',
                        'valid_email' => 'Please use valid Email',
                        'max_length' => 'Email is too large'
                    ],
                    'password' => [
                        'required' => 'Please fill password',
                        'max_length' => 'Password is too large'
                    ],
                ]
            )) {

                $email = $this->request->getPost('email');
                $password = md5($this->request->getPost('password'));

                $userModel = new UserModel();

                $checkData = $userModel->checkLoginData($email, $password);

                if ($checkData) {

                    $userData = [
                        'id' => $checkData['user_id'],
                        'name' => $checkData['user_name'],
                        'email' => $checkData['user_email'],
                    ];

                    $updateData = $userModel->update($checkData['user_id'], ['is_logged' => 1]);



                    $session->set('admin_auth', $userData);
                    return redirect()->to(base_url('admin/dashboard'));
                } else {
                    $session->setFlashdata('error_msg', ["msg" => 'Invalid Credentials', "type" => "danger"]);

                    return redirect()->back()->withInput();
                }
            } else {
                // echo 'not validate || ';

                $session->setFlashdata('invalid_creds', [
                    "errors" => $this->validator->getErrors(),
                    "type" => "danger"
                ]);
                return redirect()->back()->withInput();
            }
        }
    }
}
