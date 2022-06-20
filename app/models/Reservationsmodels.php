<?php
class Reservationsmodels
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function add($data)
    {
        $this->db->query('INSERT INTO reservation (name, email, phone, subject, date, id, user_id) VALUES(:name, :email, :phone, :subject, :date, :id, :u_id)');

        //Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':date', date('Y-m-d'));
        $this->db->bind(':id', $data['prop_id']);
        $this->db->bind(':u_id', $data['user_id']);



        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
