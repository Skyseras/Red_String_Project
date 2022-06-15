<?php
class Dashboard extends Controller
{
    public function index()
    {
        if (adminIn()) {
            $this->view('pages/dashboard');
        }else {
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
        }else {
            $this->view('dashboard/login');
        }
    }
    public function particuliers()
    {
        if (adminIn()) {
            $this->view('dashboard/particuliers');
        }else {
            $this->view('dashboard/login');
        }
    }
    public function promoteurs()
    {
        if (adminIn()) {
            $this->view('dashboard/promoteurs');
        }else {
            $this->view('dashboard/login');
        }
    }
    public function agences()
    {
        if (adminIn()) {
            $this->view('dashboard/agences');
        }else {
            $this->view('dashboard/login');
        }
    }
}
