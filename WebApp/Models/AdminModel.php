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


}