<?php
class Clientscontroller extends Controller
{
    public function __construct()
    {
        $this->clientModel = $this->model('Clientsmodels');
    }

    public function add()
    {
        $data = [
            'lname' => '',
            'fname' => '',
            'role' => '',
            'email' => '',
            'password' => '',
            'gender' => '',
            'pdp' => '',
            'city' => '',
            'phone' => '',
            'address' => '',

            'lnameError' => '',
            'fnameError' => '',
            'roleError' => '',
            'emailError' => '',
            'passwordError' => '',
            'genderError' => '',
            'pdpError' => '',
            'cityError' => '',
            'phoneError' => '',
            'addressError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'lname' => trim($_POST['lname']),
                'fname' => trim($_POST['fname']),
                'role' => 'client',
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'gender' => trim($_POST['gender']),
                'pdp' => trim($_POST['pdp']),
                'city' => trim($_POST['city']),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),

                'lnameError' => '',
                'fnameError' => '',
                'roleError' => '',
                'emailError' => '',
                'passwordError' => '',
                'genderError' => '',
                'pdpError' => '',
                'cityError' => '',
                'phoneError' => '',
                'addressError' => ''
            ];


            //Validate on letters/numbers
            if (empty($data['lname'])) {
                $data['lnameError'] = 'Entrer votre Nom.';
            } elseif (empty($data['fname'])) {
                $data['fnameError'] = 'Entrer votre Prénom.';
            } elseif (empty($data['phone'])) {
                $data['phoneError'] = 'Entrer votre Numéro de téléphone.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Entrer votre adresse email.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Entrer email en format valide.';
            }

            // Make sure that errors are empty
            if (empty($data['lnameError']) && empty($data['fnameError']) && empty($data['phoneError']) && empty($data['emailError'])) {

                //Register user from model function
                if ($this->clientModel->add($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/dashboard/clients');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('pages/dashboard', $data);
    }


    public function edit()
    {
        $data = [
            'id' => '',
            'name' => '',
            'gender' => '',
            'class' => '',
            'parent' => '',
            'address' => '',
            'email' => '',
            'birthday' => '',
            'nameError' => '',
            'genderError' => '',
            'classError' => '',
            'parentError' => '',
            'addressError' => '',
            'emailError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $_POST['id'],
                'name' => trim($_POST['name']),
                'gender' => trim($_POST['gender']),
                'class' => trim($_POST['class']),
                'parent' => trim($_POST['parent']),
                'address' => trim($_POST['address']),
                'email' => trim($_POST['email']),
                'birthday' => trim($_POST['birthday']),
                'nameError' => '',
                'genderError' => '',
                'classError' => '',
                'parentError' => '',
                'addressError' => '',
                'emailError' => '',
                'birthdayError' => ''
            ];


            //Validate username on letters/numbers
            if (empty($data['name'])) {
                $data['nameError'] = 'Please enter your name.';
            } elseif (empty($data['gender'])) {
                $data['genderError'] = 'Please enter your gender.';
            } elseif (empty($data['class'])) {
                $data['classError'] = 'Please enter your class.';
            } elseif (empty($data['parent'])) {
                $data['parentError'] = 'Please enter your parent.';
            } elseif (empty($data['address'])) {
                $data['addressError'] = 'Please enter your address.';
            } elseif (empty($data['birthday'])) {
                $data['birthdayError'] = 'Please enter your birthday.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter your email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            }

            // Make sure that errors are empty
            if (empty($data['nameError']) && empty($data['genderError']) && empty($data['emailError']) && empty($data['classError']) && empty($data['parentError']) && empty($data['addressError']) && empty($data['birthdayError'])) {

                //Register user from model function
                if ($this->userModel->edit($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/pages/students');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('students', $data);
    }



    public function delete()
    {
        $data = ['id' => $_POST['id']];
        if ($this->userModel->delete($data)) {
            //Redirect to the login page
            header('location: ' . URLROOT . '/pages/students');
        } else {
            die('Something went wrong.');
        }
        $this->view('students', $data);
    }
}
