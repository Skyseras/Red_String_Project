<?php
class Reservationcontroller extends Controller
{
    public function __construct()
    {
        $this->reservationModel = $this->model('Reservationsmodels');
    }

    public function add()
    {
        $data = [
            'prop_id' => '',
            'user_id' => '',
            'name' => '',
            'email' => '',
            'phone' => '',
            'subject' => '',
            'message' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'prop_id' => trim($_POST['prop_id']),
                'user_id' => trim($_POST['user_id']),
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'subject' => trim($_POST['subject']),
                'message' => trim($_POST['message'])
            ];
            //Register user from model function
            if ($this->reservationModel->add($data)) {
                //Redirect to the login page
                header('location: ' . URLROOT . '/pages/properties');
            } else {
                die('Something went wrong.');
            }
        }
        $this->view('pages/properties', $data);
    }
}
