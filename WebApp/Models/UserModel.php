<?php


class UserModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO users (name,surname,gender,data_lindjes,email,password,role_ID) VALUES (:name,:lastName,:gender,:birthday, :email,:password, :roleID )');
        //Binde values

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':lastName', $data['lastName']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':birthday', $data['birthday']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':roleID', $data['roleID']);


        //Exetute function

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed by the Controller
    public function findUserByEmail($email)
    {
        //Prepared statement
        $this->db->query('SELECT*FROM users WHERE email = :email');
        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered

        if ($this->db->rowCount > 0) {
            return true;
        } else {
            return false;
        }

    }

}