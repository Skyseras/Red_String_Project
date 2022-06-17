<?php
class Biensmodels
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function add($data)
    {
        $this->db->query('INSERT INTO property (city, description, type, chamber, bath, Superficie, gender, price, address, pdb) VALUES(:city, :description, :type, :chamber, :bath, :Superficie, :gender, :price, :address, :pdb)');

        //Bind values
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':chamber', $data['chamber']);
        $this->db->bind(':bath', $data['bath']);
        $this->db->bind(':Superficie', $data['Superficie']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':pdb', $data['pdb']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function edit($data)
    {
        $this->db->query("UPDATE property SET city=:city,description=:description,type=:type,chamber=:chamber,bath=:bath,Superficie=:Superficie,gender=:gender,price=:price,address=:address,pdb=:pdb WHERE id =:id");

        //Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':chamber', $data['chamber']);
        $this->db->bind(':bath', $data['bath']);
        $this->db->bind(':Superficie', $data['Superficie']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':pdb', $data['pdb']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



    public function delete($data)
    {
        $this->db->query('DELETE FROM property WHERE id=:id');

        $this->db->bind(':id', $data['id']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getAllBiens()
    {
        $this->db->query('SELECT * FROM property order by id DESC');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getpropsearch($word)
    {        
        $this->db->query("SELECT * FROM property WHERE city LIKE '%$word%' or type LIKE '%$word%' or gender LIKE '%$word%' order by id DESC;");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getsearch($word)
    {
        $this->db->query("SELECT * FROM property WHERE city LIKE '%$word%' or type LIKE '%$word%' or gender LIKE '%$word%' or superficie LIKE '%$word%' or price LIKE '%$word%' order by id DESC;");
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
