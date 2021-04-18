<?php


class UserModel  {

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findUserByEmail(){
        $this->db->query('SELECT*FROM ');
    }

}