<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        $this->db->query('INSERT INTO users (lname, fname, role, email, password) VALUES(:lname, :fname, :role, :email, :password)');

        //Bind values
        $this->db->bind(':lname', $data['lname']);
        $this->db->bind(':fname', $data['fname']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password) {
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function getagent()
    {
        $this->db->query('SELECT * FROM users WHERE role="agence" OR role="particulier" order by user_id DESC;');
        $this->db->execute();
        return $this->db->resultSet();
    }

}
