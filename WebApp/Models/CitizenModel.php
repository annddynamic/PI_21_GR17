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

    public function SeeMyReports($data){
        $this->db->query('SELECT  emri, dt_raportimit, description, gejndja
                              FROM status s INNER JOIN report r on s.sID=r.sID
                              LEFT JOIN users u on r.uID=u.uID
                              WHERE r.uID=:sessionID and s.sID=3');

        $this->db->bind(':sessionID', $_SESSION['user_id']);

        $result = $this->db->resultSet();

    }

}