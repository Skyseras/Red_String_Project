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
            $this->view('pages/dashboard');
        }else {
            $this->view('dashboard/login');
        }
    }
    public function E404()
    {
        $this->view('pages/404');
    }
}
