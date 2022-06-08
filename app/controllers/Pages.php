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
    public function blog()
    {
        $this->view('pages/blog');
    }
    public function contact()
    {
        $this->view('pages/contact');
    }
}
