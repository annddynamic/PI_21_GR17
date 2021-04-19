<?php


class UserModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function registerCitizen($data)
    {
        $this->db->query('INSERT INTO users (name,surname,gender,data_lindjes,email,password,role_ID) 
                                        VALUES (:name,:lastName,:gender,:birthday,:email,:password, :roleID )');
        //Binde values

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':lastName', $data['lastName']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':birthday', $data['birthday']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':roleID', $data['role_ID']);


        //Exetute function

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function registerPolice($data)
    {
        $this->db->query('INSERT INTO pending_users (name,surname,gender,data_lindjes,rruga,qyteti,shteti, ZIP,nr_telefonit,email,password,role_ID) 
                                                VALUES (:name,:lastName,:gender,:birthday,:street,:city,:country,:zipCode,:phoneNumber,:email,:password,:roleID )');
        //Bind values

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':lastName', $data['lastName']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':birthday', $data['birthday']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':zipCode', $data['zipCode']);
        $this->db->bind(':phoneNumber', $data['phoneNumber']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':street', $data['street']);
        $this->db->bind(':roleID', $data['role_ID']);


        //Exetute function

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



    public function login($email, $password) {
         $this->db->query('SELECT * FROM users WHERE email = :email');

         //Binde Value
        $this->db->bind(':email',$email);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if(password_verify($password, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }

    //Find user by email. Email is passed by the Controller
    public function findUserByEmailUsers($email)
     {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Email param will be binded with the email variable

        $this->db->bind(':email', $email);
        $this->db->execute();

        //Check if email is already registered

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function findUserByEmailPending($email)
    {
        //Prepared statement
        $this->db->query('SELECT * FROM pending_users WHERE email = :email');

        //Email param will be binded with the email variable

        $this->db->bind(':email', $email);
        $this->db->execute();

        //Check if email is already registered

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

    }

}