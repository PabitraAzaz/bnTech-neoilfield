<?php

namespace App\Controllers;

use App\Models\UserModel;


class Home extends BaseController
{
    public function index(): string
    {
        return view('web/home');
    }

    public function services(): string
    {
        return view('web/services');
    }


    public function gallery()
    {
        return view('web/gallery');
    }


    public function about_us()
    {
        return view('web/about');
    }

    public function contact_us()
    {
        return view('web/contact');
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
