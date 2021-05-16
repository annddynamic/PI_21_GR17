<?php


class CitizenModel
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function ChangeData($data){

        $this->db->query('UPDATE users
        SET email=:email, password=:password
        WHERE uID =:sessionID');

        $this->db->bind(':email', $data['newEmail']);
        $this->db->bind(':password', $data['newPassword']);
        $this->db->bind(':sessionID', $_SESSION['user_id']);

        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
    }

}