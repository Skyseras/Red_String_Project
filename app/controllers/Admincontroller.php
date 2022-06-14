<?php
class Admincontroller extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('Adminmodels');
    }

    public function register()
    {
        $data = [
            'name' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',

            'nameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'nameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate name on letters/numbers
            if (empty($data['name'])) {
                $data['nameError'] = 'SVP ajouter le nom.';
            } elseif (!preg_match($nameValidation, $data['name'])) {
                $data['nameError'] = 'Le nom doit contenir des chiffres et des lettres seulement.';
            } else {
                //Check if name exists.
                if ($this->adminModel->findAdminByName($data['name'])) {
                    $data['nameError'] = 'Ce Nom est dèja inscrit! Choisi un autre nom.';
                }
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Entrez un email valide.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Entrez une format valide.';
            }
            

            // Validate password on length, numeric values,
            if (empty($data['password'])) {
                $data['passwordError'] = 'SVP ajouter un password.';
            } elseif (strlen($data['password']) < 6) {
                $data['passwordError'] = 'Password au moin 8 charactères';
            } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password au moin un chiffre.';
            }

            //Validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'SVP ajouter un password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Passwords ne se ressemblent pas. Réssayer encore!';
                }
            }

            // Make sure that errors are empty
            if (empty($data['nameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register admin from model function
                if ($this->adminModel->register($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/dashboard/login');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('dashboard/register', $data);
    }

    public function login()
    {
        $data = [
            'name' => '',
            'password' => '',
            'nameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'password' => trim($_POST['password']),
                'nameError' => '',
                'passwordError' => '',
            ];
            //Validate name
            if (empty($data['name'])) {
                $data['nameError'] = 'SVP entrer le Nom.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'SVP entrer le Password.';
            }

            //Check if all errors are empty
            if (empty($data['nameError']) && empty($data['passwordError'])) {
                $loggedInAdmin = $this->adminModel->login($data['name'], $data['password']);

                if ($loggedInAdmin) {
                    $this->createAdminSession($loggedInAdmin);
                } else {
                    $data['passwordError'] = 'Password ou Nom est incorrecte. Réssayer encore!';

                    $this->view('dashboard/login', $data);
                }
            }
        } else {
            $data = [
                'name' => '',
                'password' => '',
                'nameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('dashboard/login', $data);
    }

    public function createAdminSession($admin)
    {
        $_SESSION['name'] = $admin->name;
        header('location:' . URLROOT . '/pages/dashboard');
    }

    public function logout()
    {
        unset($_SESSION['name']);
        header('location:' . URLROOT . '/pages/index');
    }
}