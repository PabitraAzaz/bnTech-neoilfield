<?php



namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Models\MessageModel;
use App\Models\UserModel;








class Dashboard extends BaseController

{

    public function index()

    {
        if ($this->request->getMethod() === "GET") {

            return view('admin/dashboard');
        }
    }



    public function logout()

    {

        $session = session();

        $session->remove('admin_auth');

        return redirect()->to(base_url('/'));
    }







    public function message()

    {

        $msgModel = new MessageModel();

        $message = $msgModel->findAll();

        return view('admin/message', ['msg' => $message]);
    }
}
