<?php
class Pages extends Controller
{
    public function index()
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Biensmodels.php';
        $bienlist = new Biensmodels();
        // //array for city by property
        // $citybyprop = $s->getbiensBycity();


        // $city_names = '[';
        // $city_prop_counts = '[';
        // foreach ($citybyprop as $c) {
        //     $city_names .= "'" . $c->city_name . "',";
        //     $city_prop_counts .= "'" . $c->prop_count . "',";
        // }
        // $city_names .= ']';
        // $city_prop_counts .= ']';


        $this->view('pages/index', ['biens' => $bienlist->getAllBiens(), 'allpropandcity' => $bienlist->getbiensBycity()]);
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
                $this->view('pages/profile', ['clientinfo' => $clientinfo->getClient($_SESSION['email'])]);
            }
            if ($_SESSION['role'] == 'particulier') {
                require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Clientsmodels.php';
                $clientinfo = new Clientsmodels();
                $this->view('pages/profile', ['clientinfo' => $clientinfo->getClient($_SESSION['email'])]);
            }
            if ($_SESSION['role'] == 'agence') {
                require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Clientsmodels.php';
                $clientinfo = new Clientsmodels();
                $this->view('pages/profile', ['clientinfo' => $clientinfo->getClient($_SESSION['email'])]);
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
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/particuliersmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/agencesmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/adminmodels.php';


            $clientlist = new Clientsmodels();
            $particulierlist = new Particuliersmodels();
            $agencelist = new Agencesmodels();
            $bienlist = new Biensmodels();
            $admindetails = new Adminmodels();


            $this->view('pages/dashboard', ['admin' => $admindetails->getAdmin($_SESSION['email']), 'particuliers' => $particulierlist->getAllParticuliers(), 'agences' => $agencelist->getAllAgences(), 'clients' => $clientlist->getAllClients(), 'biens' => $bienlist->getAllBiens()]);
        } else {
            $this->view('dashboard/login');
        }
    }
    public function E404()
    {
        $this->view('pages/404');
    }
}
