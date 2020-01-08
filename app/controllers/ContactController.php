<?php
use app\core\Controller;

class ContactController extends Controller {

    public function index()
    {
        $data['title'] = 'Contact';
        if(Flasher::getMemberLog()['id']){
            $data['countcart'] = $this->model('Cart')->countMyCart(Flasher::getMemberLog()['id']);
            // var_dump($data['countcart']);
            // die();
        }
        $this->view('template/header', $data);
        $this->view('contact');
        $this->view('template/footer');
    }

    public function store()
    {
        $this->model('Contact')->store($_POST);
        $this->redirect('contact');
    }
}
