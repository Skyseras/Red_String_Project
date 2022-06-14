<?php
class Dashboard extends Controller
{
    public function index()
    {
        $this->view('pages/dashboard');
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
        $this->view('dashboard/clients');
    }
    public function particuliers()
    {
        $this->view('dashboard/particuliers');
    }
    public function promoteurs()
    {
        $this->view('dashboard/promoteurs');
    }
    public function agences()
    {
        $this->view('dashboard/agences');
    }
}
