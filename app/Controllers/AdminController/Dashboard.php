<?php



namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Models\MessagesModel;

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







    public function message_list()

    {

        $msgModel = new MessagesModel();

        $message = $msgModel->findAll();

        return view('admin/message', ['msg' => $message]);
    }


    public function message_delete($id)
    {

        $session = session();
        $message = new MessagesModel();


        if (!empty($message->select('id')->where('id', $id)->first())) {
            if ($message->delete($id)) {
                $session->setFlashdata('msg', ['msg' => 'Successfully Deleted a message data', 'type' => 'success']);
                return redirect()->to(site_url("admin/messages"));
            } else {
                $session->setFlashdata('invalid_creds', ['errors' => "Something went wrong", 'type' => 'danger']);
                return redirect()->to(site_url("admin/messages/"));
            }
        } else {
            $session->setFlashdata('invalid_creds', ['errors' => "Message Not Found", 'type' => 'danger']);
            return redirect()->to(site_url("admin/messages/"));
        }
    }
}
