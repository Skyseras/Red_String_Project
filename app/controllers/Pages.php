<?php
class Pages extends Controller
{
    public function index()
    {
        $this->view('pages/index');
    }
    public function properties()
    {
        $this->view('pages/properties');
    }
    public function about()
    {
        $this->view('pages/about');
    }
}
