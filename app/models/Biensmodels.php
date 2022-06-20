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



    public function getBien($id)
    {
        $this->db->query('SELECT * FROM property WHERE id=:id');
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->resultSetassoc();
    }



    public function getBiensOf($user_id)
    {
        $this->db->query('SELECT * FROM property WHERE id=:id order by id DESC');
        $this->db->bind(':id', $user_id);
        $this->db->execute();
        return $this->db->resultSet();
    }


    public function getVedetteBiens()
    {
        $this->db->query('SELECT * FROM users INNER JOIN property ON users.user_id=property.user_id order by id DESC LIMIT 4');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getVedetteagent()
    {
        $this->db->query('SELECT * FROM users INNER JOIN property ON users.user_id=property.user_id order by id DESC LIMIT 4');
        $this->db->execute();
        return $this->db->resultSetassoc();
    }



    public function getAllProp()
    {
        $this->db->query('SELECT * FROM users INNER JOIN property ON users.user_id=property.user_id order by id DESC');
        $this->db->execute();
        return $this->db->resultSet();
    }



    public function getAllPropSearch($type, $mot, $genre, $ville, $prix)
    {
        $this->db->query("SELECT * FROM property WHERE type LIKE '%$type%' AND description LIKE '%$mot%' AND gender LIKE '%$genre%' AND city LIKE '%$ville%' AND price <= '$prix' order by id DESC;");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllPropSearch2($type, $mot, $genre, $ville)
    {
        $this->db->query("SELECT * FROM property WHERE type LIKE '%$type%' AND description LIKE '%$mot%' AND gender LIKE '%$genre%' AND city LIKE '%$ville%' order by id DESC;");
        $this->db->execute();
        return $this->db->resultSet();
    }





    public function getAllAgent()
    {
        $this->db->query('SELECT * FROM users INNER JOIN property ON users.user_id=property.user_id order by id DESC');
        $this->db->execute();
        return $this->db->resultSetassoc();
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
    public function getBiensVente()
    {
        $this->db->query('SELECT * FROM property WHERE type="Vente"');
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getBiensLocation()
    {
        $this->db->query('SELECT * FROM property WHERE type="Location"');
        $this->db->execute();
        return $this->db->resultSet();
    }


    public function getbiensBycity()
    {
        $this->db->query('SELECT count(*) AS prop_count, city AS city_name FROM property GROUP by city;');
        $this->db->execute();
        return $this->db->resultSet();
    }


    public function getbiensByagent()
    {
        $this->db->query('SELECT count(*) AS property_count, user_id AS agent_name FROM property GROUP by user_id;');
        $this->db->execute();
        return $this->db->resultSetassoc();
    }




    public function getc()
    {
        $this->db->query('SELECT * FROM property WHERE city = "Casablanca"');
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getm()
    {
        $this->db->query('SELECT * FROM property WHERE city = "Marrakech"');
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function gettan()
    {
        $this->db->query('SELECT * FROM property WHERE city = "Tanger"');
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getrab()
    {
        $this->db->query("SELECT * FROM property WHERE city = 'Rabat'");
        $this->db->execute();
        return $this->db->resultSet();
    }
}
