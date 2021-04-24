<?php


class AdminModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUsers()
    {
        $this->db->query('SELECT name,surname,gender,data_lindjes,rruga,email,role_name 
                              FROM users u INNER JOIN roles r ON u.role_ID = r.role_ID');

        $result = $this->db->resultSet();

        return $result;
    }

    public function countUsers()
    {
        $this->db->query('SELECT COUNT(name) FROM users');

        $result = $this->db->resultSet();

        return $result;
    }

    public function countPoliceUsers()
    {
        $this->db->query('SELECT COUNT(name) FROM users WHERE role_ID=2');

        $result = $this->db->resultSet();

        return $result;
    }

    public function countReport()
    {
        $this->db->query('SELECT COUNT(emri) FROM report');

        $result = $this->db->resultSet();

        return $result;
    }

    public function pendingApproval()
    {
        $this->db->query('SELECT uID,name,surname FROM pending_users WHERE role_ID=2');

        $result = $this->db->resultSet();

        return $result;
    }

    public function deletePolice($data){


        $this->db->query('DELETE FROM pending_users WHERE uID=:id');
        //Bind values

        $this->db->bind(':id', $data['uID']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function deletePoliceUser($data){


        $this->db->query('DELETE FROM users WHERE uID=:id');
        //Bind values

        $this->db->bind(':id', $data['uID']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function addPolice($data)
    {


        $this->db->query('INSERT INTO users(name, surname, gender, data_lindjes, rruga, qyteti, shteti, ZIP, nr_telefonit, email, password, inDuty, role_ID) 
                                        SELECT name, surname, gender, data_lindjes, rruga, qyteti, shteti, ZIP, nr_telefonit, email, password, inDuty, role_ID 
                                        FROM pending_users  
                                        WHERE uID=:id');
        //Bind values

        $this->db->bind(':id', $data['uID']);


        if ($this->db->execute()) {
            $this->deletePolice($data);
            return true;
        } else {
            return false;
        }

    }

    public function policeOfficials()
    {
        $this->db->query('SELECT uID, name,surname,rruga,nr_telefonit FROM users WHERE role_ID=2');

        $result = $this->db->resultSet();

        return $result;
    }

    public function addNews($data)
    {
        $this->db->query('INSERT INTO news (foto,title,published,description) 
                                        VALUES (:foto,:title,:published,:description )');
        //Binde values

        $this->db->bind(':foto', $data['foto']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':published', $data['published']);
        $this->db->bind(':description', $data['description']);

        //Exetute function

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }





}