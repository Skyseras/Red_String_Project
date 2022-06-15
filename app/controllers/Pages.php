<?php
class Pages extends Controller
{
    public function index()
    {
        $this->view('pages/index');
    }
    public function about()
    {
        $this->view('pages/about');
    }
    public function properties()
    {
        $this->view('pages/properties');
    }
    public function agents()
    {
        $this->view('pages/agents');
    }
    public function contact()
    {
        $this->view('pages/contact');
    }
    public function login()
    {
        $this->view('pages/login');
    }
    public function register()
    {
        $this->view('pages/register');
    }
    public function profile()
    {
        $this->view('pages/profile');
    }
    public function dashboard()
    {
        if (adminIn()) {
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Clientsmodels.php';
            $clientlist = new Clientsmodels();
            $this->view('pages/dashboard', ['clients'=>$clientlist->getAllClients()]);
        }else {
            $this->view('dashboard/login');
        }
    }
    public function E404()
    {
        $this->view('pages/404');
    }
}
