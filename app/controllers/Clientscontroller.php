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
                'pdp' => $_FILES['pdp'],
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



            //Validate pdp
            $pdpName = $data['pdp']['name'];
            $pdpSize = $data['pdp']['size'];
            $pdpTmp = $data['pdp']['tmp_name'];
            $pdpError = $data['pdp']['error'];
            $data['pdp'] = '';
            if ($pdpError === 0) {
                if ($pdpSize > 125000) {
                    $data['pdpError'] = '1mb alloué! Image trop volumineuse.';
                } else {
                    $pdpExt = explode('.', $pdpName);
                    $pdpActualExt = strtolower(end($pdpExt));
                    $allowed = array('jpg', 'jpeg', 'png');
                    if (in_array($pdpActualExt, $allowed)) {
                        $pdpNameNew = uniqid('', true) . '.' . $pdpActualExt;
                        $pdpDestination = $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/public/img/' . $pdpNameNew;
                        move_uploaded_file($pdpTmp, $pdpDestination);
                        $data['pdp'] = $pdpNameNew;
                    } else {
                        $data['pdpError'] = 'Format de l\'image non supporté.';
                    }
                }
            } else {
                $data['pdpError'] = 'Veuillez choisir une image';
            }

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
            'lname' => '',
            'fname' => '',
            'role' => '',
            'email' => '',
            'password' => '',
            'gender' => '',
            'pdp' => '',
            'pdpold' => '',
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
                'id' => trim($_POST['id']),
                'lname' => trim($_POST['lname']),
                'fname' => trim($_POST['fname']),
                'role' => 'client',
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'pdp' => $_FILES['pdp'],
                'pdpold' => trim($_POST['pdpold']),
                'city' => trim($_POST['city']),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),

                'lnameError' => '',
                'fnameError' => '',
                'roleError' => '',
                'emailError' => '',
                'passwordError' => '',
                'pdpError' => '',
                'cityError' => '',
                'phoneError' => '',
                'addressError' => ''
            ];

            //Validate pdp
            if ($data['pdp']['error'] !== 4) {
                $data['pdp'] = '';
                $data['pdp'] = $data['pdpold'];
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

                if (empty($data['lnameError']) && empty($data['fnameError']) && empty($data['phoneError']) && empty($data['emailError'])) {
                    //Register user from model function
                    if ($this->clientModel->edit($data)) {
                        //Redirect to the login page
                        header('location: ' . URLROOT . '/dashboard/clients');
                    } else {
                        die('Something went wrong.');
                    }
                }
            } else {
                $pdpName = $data['pdp']['name'];
                $pdpSize = $data['pdp']['size'];
                $pdpTmp = $data['pdp']['tmp_name'];
                $pdpError = $data['pdp']['error'];
                $data['pdp'] = '';
                if ($pdpError === 0) {
                    if ($pdpSize > 125000) {
                        $data['pdpError'] = '1mb alloué! Image trop volumineuse.';
                    } else {
                        $pdpExt = explode('.', $pdpName);
                        $pdpActualExt = strtolower(end($pdpExt));
                        $allowed = array('jpg', 'jpeg', 'png');
                        if (in_array($pdpActualExt, $allowed)) {
                            $pdpNameNew = uniqid('', true) . '.' . $pdpActualExt;
                            $pdpDestination = $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/public/img/' . $pdpNameNew;
                            move_uploaded_file($pdpTmp, $pdpDestination);
                            $data['pdp'] = $pdpNameNew;
                        } else {
                            $data['pdpError'] = 'Format de l\'image non supporté.';
                        }
                    }
                } else {
                    $data['pdpError'] = 'Veuillez choisir une image';
                }

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
                    if ($this->clientModel->edit($data)) {
                        //Redirect to the login page
                        header('location: ' . URLROOT . '/dashboard/clients');
                    } else {
                        die('Something went wrong.');
                    }
                }
            }
        }
        $this->view('/dashboard/clients', $data);
    }



    public function delete()
    {
        $data = ['id' => $_POST['id']];
        if ($this->clientModel->delete($data)) {
            //Redirect to the login page
            header('location: ' . URLROOT . '/dashboard/clients');
        } else {
            die('Something went wrong.');
        }
        $this->view('dashboard/clients');
    }
}
