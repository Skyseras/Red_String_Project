<?php
class Bienscontroller extends Controller
{
    public function __construct()
    {
        $this->bienModel = $this->model('Biensmodels');
    }

    public function add()
    {
        $data = [
            'city' => '',
            'description' => '',
            'type' => '',
            'chamber' => '',
            'bath' => '',
            'Superficie' => '',
            'gender' => '',
            'price' => '',
            'address' => '',
            'pdb' => '',

            'cityError' => '',
            'descriptionError' => '',
            'typeError' => '',
            'chamberError' => '',
            'bathError' => '',
            'SuperficierError' => '',
            'genderError' => '',
            'priceError' => '',
            'addressError' => '',
            'pdbError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'city' => trim($_POST['city']),
                'description' => trim($_POST['description']),
                'type' => trim($_POST['type']),
                'chamber' => trim($_POST['chamber']),
                'bath' => trim($_POST['bath']),
                'Superficie' => trim($_POST['Superficie']),
                'gender' => trim($_POST['gender']),
                'price' => trim($_POST['price']),
                'address' => trim($_POST['address']),
                'pdb' => $_FILES['pdb'],


                'cityError' => '',
                'descriptionError' => '',
                'typeError' => '',
                'chamberError' => '',
                'bathError' => '',
                'SuperficierError' => '',
                'genderError' => '',
                'priceError' => '',
                'addressError' => '',
                'pdbError' => ''
            ];

            //Validate pdb
            $pdbName = $data['pdb']['name'];
            $pdbSize = $data['pdb']['size'];
            $pdbTmp = $data['pdb']['tmp_name'];
            $pdbError = $data['pdb']['error'];
            $data['pdb'] = '';
            if ($pdbError === 0) {
                if ($pdbSize > 125000) {
                    $data['pdbError'] = '1mb alloué! Image trop volumineuse.';
                } else {
                    $pdbExt = explode('.', $pdbName);
                    $pdbActualExt = strtolower(end($pdbExt));
                    $allowed = array('jpg', 'jpeg', 'png');
                    if (in_array($pdbActualExt, $allowed)) {
                        $pdbNameNew = uniqid('', true) . '.' . $pdbActualExt;
                        $pdbDestination = $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/public/img/' . $pdbNameNew;
                        move_uploaded_file($pdbTmp, $pdbDestination);
                        $data['pdb'] = $pdbNameNew;
                    } else {
                        $data['pdbError'] = 'Format de l\'image non supporté.';
                    }
                }
            } else {
                $data['pdbError'] = 'Veuillez choisir une image';
            }

            if ($this->bienModel->add($data)) {
                //Redirect to the login page
                header('location: ' . URLROOT . '/pages/dashboard');
            } else {
                die('Something went wrong.');
            }
        }
        $this->view('pages/dashboard', $data);
    }


    public function edit()
    {
        $data = [
            'id' => '',
            'city' => '',
            'description' => '',
            'type' => '',
            'chamber' => '',
            'bath' => '',
            'Superficie' => '',
            'gender' => '',
            'price' => '',
            'address' => '',
            'pdb' => '',

            'cityError' => '',
            'descriptionError' => '',
            'typeError' => '',
            'chamberError' => '',
            'bathError' => '',
            'SuperficierError' => '',
            'genderError' => '',
            'priceError' => '',
            'addressError' => '',
            'pdbError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => trim($_POST['id']),
                'city' => trim($_POST['city']),
                'description' => trim($_POST['description']),
                'type' => trim($_POST['type']),
                'chamber' => trim($_POST['chamber']),
                'bath' => trim($_POST['bath']),
                'Superficie' => trim($_POST['Superficie']),
                'gender' => trim($_POST['gender']),
                'price' => trim($_POST['price']),
                'address' => trim($_POST['address']),
                'pdb' => $_FILES['pdb'],
                'pdbold' => trim($_POST['pdbold']),


                'cityError' => '',
                'descriptionError' => '',
                'typeError' => '',
                'chamberError' => '',
                'bathError' => '',
                'SuperficierError' => '',
                'genderError' => '',
                'priceError' => '',
                'addressError' => '',
                'pdbError' => ''
            ];

            //Validate pdb
            if ($data['pdb']['error'] !== 0) {
                $data['pdb'] = '';
                $data['pdb'] = $data['pdbold'];

                if ($this->bienModel->edit($data)) {
                    //Redirect to the login page
                    $this->view('pages/dashboard', $data);
                } else {
                    die('Something went wrong.');
                }
            } else {
                $pdbName = $data['pdb']['name'];
                $pdbSize = $data['pdb']['size'];
                $pdbTmp = $data['pdb']['tmp_name'];
                $pdbError = $data['pdb']['error'];
                $data['pdb'] = '';
                if ($pdbError === 0) {
                    if ($pdbSize > 125000) {
                        $data['pdbError'] = '1mb alloué! Image trop volumineuse.';
                    } else {
                        $pdbExt = explode('.', $pdbName);
                        $pdbActualExt = strtolower(end($pdbExt));
                        $allowed = array('jpg', 'jpeg', 'png');
                        if (in_array($pdbActualExt, $allowed)) {
                            $pdbNameNew = uniqid('', true) . '.' . $pdbActualExt;
                            $pdbDestination = $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/public/img/' . $pdbNameNew;
                            move_uploaded_file($pdbTmp, $pdbDestination);
                            $data['pdb'] = $pdbNameNew;
                        } else {
                            $data['pdbError'] = 'Format de l\'image non supporté.';
                        }
                    }
                } else {
                    $data['pdbError'] = 'Veuillez choisir une image';
                }

                //Register user from model function
                if ($this->bienModel->edit($data)) {
                    //Redirect to the login page
                    $this->view('pages/dashboard', $data);
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('pages/dashboard', $data);
    }



    public function delete()
    {
        $data = ['id' => $_POST['id']];
        if ($this->bienModel->delete($data)) {
            //Redirect to the login page
            header('location: ' . URLROOT . '/pages/dashboard');
        } else {
            die('Something went wrong.');
        }
        $this->view('pages/dashboard');
    }
}
