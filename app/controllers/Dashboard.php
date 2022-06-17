<?php
class Dashboard extends Controller
{
    public function __construct()
    {

    }
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
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Adminmodels.php';
            $admindetails = new Adminmodels();
            $clientlist = new Clientsmodels();
            $this->view('dashboard/clients', ['admin' => $admindetails->getAdmin($_SESSION['email']), 'clients' => $clientlist->getAllClients()]);
        } else {
            $this->view('dashboard/login');
        }
    }
    public function particuliers()
    {
        if (adminIn()) {
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Particuliersmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Adminmodels.php';
            $admindetails = new Adminmodels();
            $particulierlist = new Particuliersmodels();
            $this->view('dashboard/particuliers', ['admin' => $admindetails->getAdmin($_SESSION['email']), 'particuliers' => $particulierlist->getAllParticuliers()]);
        } else {
            $this->view('dashboard/login');
        }
    }
    public function agences()
    {
        if (adminIn()) {
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Agencesmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Adminmodels.php';
            $admindetails = new Adminmodels();
            $agencelist = new Agencesmodels();
            $this->view('dashboard/agences', ['admin' => $admindetails->getAdmin($_SESSION['email']), 'agences' => $agencelist->getAllAgences()]);
        } else {
            $this->view('dashboard/login');
        }
    }
    public function property($param = '')
    {
        if (adminIn()) {
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Biensmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Adminmodels.php';
            $admindetails = new Adminmodels();
            $bienlist = new Biensmodels();

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
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Biensmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Adminmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Clientsmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Agencesmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Particuliersmodels.php';

            $particulierlist = new Particuliersmodels();
            $agencelist = new Agencesmodels();
            $clientlist = new Clientsmodels();
            $bienlist = new Biensmodels();
            $admindetails = new Adminmodels();

            $this->view('dashboard/graphs', ['biensvente' => $bienlist->getBiensVente(), 'bienslocation' => $bienlist->getBiensLocation(), 'clients' => $clientlist->getAllClients(), 'agences' => $agencelist->getAllAgences(), 'particuliers' => $particulierlist->getAllParticuliers(), 'biens' => $bienlist->getAllBiens(), 'admin' => $admindetails->getAdmin($_SESSION['email']), 'c' => $bienlist->getc(), 'm' => $bienlist->getm(), 'tan' => $bienlist->gettan(), 'rab' => $bienlist->getrab()]);
        } else {
            $this->view('dashboard/login');
        }
    }
    public function E404()
    {
        $this->view('pages/404');
    }
}
