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
        if (isLoggedIn()) {
            if ($_SESSION['role'] == 'client') {
                require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Clientsmodels.php';
                $clientinfo = new Clientsmodels();
                $this->view('pages/profile', ['clientinfo'=>$clientinfo->getClient($_SESSION['email'])]);
            }
            if ($_SESSION['role'] == 'particulier') {
                require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Clientsmodels.php';
                $clientinfo = new Clientsmodels();
                $this->view('pages/profile', ['clientinfo'=>$clientinfo->getClient($_SESSION['email'])]);
            }
            if ($_SESSION['role'] == 'agence') {
                require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Clientsmodels.php';
                $clientinfo = new Clientsmodels();
                $this->view('pages/profile', ['clientinfo'=>$clientinfo->getClient($_SESSION['email'])]);
            }
        } else {
            $this->view('pages/login');
        }
    }
    public function dashboard()
    {
        if (adminIn()) {
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Clientsmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Biensmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Adminmodels.php';


            $clientlist = new Clientsmodels();
            $bienlist = new Biensmodels();
            $admindetails = new Adminmodels();


            $this->view('pages/dashboard', ['admin' => $admindetails->getAdmin($_SESSION['email']), 'clients' => $clientlist->getAllClients(), 'biens'=>$bienlist->getAllBiens()]);
        } else {
            $this->view('dashboard/login');
        }
    }
    public function E404()
    {
        $this->view('pages/404');
    }
}
