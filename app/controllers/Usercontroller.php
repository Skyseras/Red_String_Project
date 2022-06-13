<?php
class Usercontroller extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register()
    {
        $data = [
            'name' => '',
            'role' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',

            'nameError' => '',
            'roleError' => '',
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
                'role' => trim($_POST['role']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'nameError' => '',
                'roleError' => '',
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
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'SVP ajouter adresse email.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Ajouter adresse en format correcte.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Adress Email dèja inscrite.';
                }
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
            if (empty($data['nameError']) && empty($data['roleError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->userModel->register($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/pages/login');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('pages/register', $data);
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
                $loggedInUser = $this->userModel->login($data['name'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password ou Nom est incorrecte. Réssayer encore!';

                    $this->view('pages/login', $data);
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
        $this->view('pages/login', $data);
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['role'] = $user->role;
        header('location:' . URLROOT . '/pages/index');
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['name']);
        unset($_SESSION['role']);
        header('location:' . URLROOT . '/pages/index');
    }
}