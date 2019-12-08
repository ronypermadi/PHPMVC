<?php
use app\core\Controller;

class AdminDashboardController extends Controller {

    public function __construct()
    {
        if(is_null(Flasher::getLog())){
            $this->redirect('adminauthentication');
        }
    }

    public function index()
    {
        $data['user'] = Flasher::getLog();
        $data['title'] = 'Dashboard';

        $this->view('template2/header', $data);
        $this->view('admin_dashboard', $data);
        $this->view('template2/footer');
    }
}
