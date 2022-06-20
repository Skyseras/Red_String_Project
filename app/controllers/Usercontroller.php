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
            'lname' => '',
            'fname' => '',
            'role' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',

            'lnameError' => '',
            'fnameError' => '',
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
                'lname' => trim($_POST['lname']),
                'fname' => trim($_POST['fname']),
                'role' => trim($_POST['role']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'lnameError' => '',
                'fnameError' => '',
                'roleError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate name on letters/numbers
            if (empty($data['lname'])) {
                $data['lnameError'] = 'SVP ajouter le nom.';
            } elseif (!preg_match($nameValidation, $data['lname'])) {
                $data['lnameError'] = 'Le nom doit contenir des chiffres et des lettres seulement.';
            }
            if (empty($data['fname'])) {
                $data['fnameError'] = 'SVP ajouter le Prénom.';
            } elseif (!preg_match($nameValidation, $data['fname'])) {
                $data['fnameError'] = 'Le nom doit contenir des chiffres et des lettres seulement.';
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
            if (empty($data['lnameError']) && empty($data['fnameError']) && empty($data['roleError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

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
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '',
            ];
            //Validate name
            if (empty($data['email'])) {
                $data['emailError'] = 'SVP entrer le Nom.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'SVP entrer le Password.';
            }

            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password ou Nom est incorrecte. Réssayer encore!';

                    $this->view('pages/login', $data);
                }
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('pages/login', $data);
    }

    public function createUserSession($user)
    {
        $_SESSION['lname'] = $user->lname;
        $_SESSION['fname'] = $user->fname;
        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->role;
        header('location:' . URLROOT . '/pages/index');
    }

    public function logout()
    {
        unset($_SESSION['lname']);
        unset($_SESSION['email']);
        unset($_SESSION['fname']);
        unset($_SESSION['role']);
        header('location:' . URLROOT . '/pages/index');
    }
}
