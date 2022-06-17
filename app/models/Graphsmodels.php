<?php
class Graphsmodels
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function add($data)
    {
        $this->db->query('INSERT INTO users (lname, fname, role, email, password, gender, pdp, city, phone, address) VALUES(:lname, :fname, :role, :email, :password, :gender, :pdp, :city, :phone, :address)');

        //Bind values
        $this->db->bind(':lname', $data['lname']);
        $this->db->bind(':fname', $data['fname']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':pdp', $data['pdp']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':address', $data['address']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function edit($data)
    {
        $this->db->query("UPDATE users SET lname=:lname,fname=:fname,role=:role,email=:email,password=:password,pdp=:pdp,city=:city,phone=:phone,address=:address WHERE id =:id");

        //Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':lname', $data['lname']);
        $this->db->bind(':fname', $data['fname']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':pdp', $data['pdp']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':address', $data['address']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



    public function delete($data)
    {
        $this->db->query('DELETE FROM users WHERE id=:id');

        $this->db->bind(':id', $data['id']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }






    public function getClient($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->singleassoc();

        return $row;
    }
    
    public function getAllClients()
    {
        $this->db->query('SELECT * FROM users WHERE role="client" order by id DESC');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getsearch($word)
    {
        $this->db->query("SELECT * FROM students WHERE name LIKE '%$word%' OR gender LIKE '%$word%' OR class LIKE '%$word%' OR parent LIKE '%$word%' OR address LIKE '%$word%' OR email LIKE '%$word%' OR birthday LIKE '%$word%' order by id DESC");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getStudentsMale()
    {
        $this->db->query('SELECT * FROM students WHERE gender="Male"');
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getStudentsFemale()
    {
        $this->db->query('SELECT * FROM students WHERE gender="Female"');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getStudentsByClass()
    {
        $this->db->query('SELECT count(*) AS students_count, class AS class_name FROM students GROUP by class;');
        $this->db->execute();
        return $this->db->resultSet();
    }

}
