<?php
class Dashboard extends Controller
{
    public function index()
    {
        if (adminIn()) {
            $this->view('pages/dashboard');
        } else {
            $this->view('dashboard/login');
        }
    }
    public function login()
    {
        $this->view('dashboard/login');
    }
    public function register()
    {
        $this->view('dashboard/register');
    }
    public function clients()
    {
        if (adminIn()) {
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Clientsmodels.php';
            $clientlist = new Clientsmodels();
            $this->view('dashboard/clients', $clientlist->getAllClients());
        } else {
            $this->view('dashboard/login');
        }
    }
    public function particuliers()
    {
        if (adminIn()) {
            $this->view('dashboard/particuliers');
        } else {
            $this->view('dashboard/login');
        }
    }
    public function agences()
    {
        if (adminIn()) {
            $this->view('dashboard/agences');
        } else {
            $this->view('dashboard/login');
        }
    }
    public function property($param = '')
    {
        if (adminIn()) {
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Biensmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Adminmodels.php';

            $bienlist = new Biensmodels();
            $admindetails = new Adminmodels();



            if (!empty($param)) {
                $this->view('dashboard/property', ['admin' => $admindetails->getAdmin($_SESSION['email']), 'biens' => $bienlist->getpropsearch($param)]);
            } else if (isset($_GET['searchword'])) {
                $this->view('dashboard/property', ['admin' => $admindetails->getAdmin($_SESSION['email']), 'biens' => $bienlist->getsearch($_GET['searchword'])]);
            } else {
                $this->view('dashboard/property', ['admin' => $admindetails->getAdmin($_SESSION['email']), 'biens' => $bienlist->getAllBiens()]);
            }
        }
    }
    public function graphs()
    {
        if (adminIn()) {
            $this->view('dashboard/graphs');
        } else {
            $this->view('dashboard/login');
        }
    }
    public function E404()
    {
        $this->view('pages/404');
    }
}
