<?php
class Adminmodels {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        $this->db->query('INSERT INTO admins (name, email, password, pdp) VALUES(:name, :email, :password, :pdp)');

        //Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':pdp', $data['pdp']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($name, $password) {
        $this->db->query('SELECT * FROM admins WHERE name = :name');

        //Bind value
        $this->db->bind(':name', $name);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    //Find user by name. name is passed in by the Controller.
    public function findAdminByName($name) {
        //Prepared statement
        $this->db->query('SELECT * FROM admins WHERE name = :name');

        //Name param will be binded with the name variable
        $this->db->bind(':name', $name);

        //Check if name is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
