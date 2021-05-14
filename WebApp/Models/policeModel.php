<?php 

session_start();

Class PoliceModel extends Database {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    


    public function getEmergencyReports(){

        $this->db->query('SELECT reID, emri, dt_raportimit, description, address, foto
                              FROM status s INNER JOIN report r on s.sID=r.sID
                              LEFT JOIN users u on r.uID=u.uID
                              WHERE Emergency =1 and r.sID = 1');

        $result = $this->db->resultSet();

        return $result;

    }

    public function getRandomeReports(){

        $this->db->query('SELECT reID,emri, dt_raportimit, description, address, foto
                              FROM status s INNER JOIN report r on s.sID=r.sID
                              LEFT JOIN users u on r.uID=u.uID
                              WHERE Emergency =0 and r.sID =1');

        $result = $this->db->resultSet();

        return $result;

    }

    public function takeReport($data){


        
        $this->db->query('UPDATE report
        SET sID=2, uID =:sessionID
        WHERE reID=:reID');


        $this->db->bind(':reID', $data['uID']);
        $this->db->bind(':sessionID', $_SESSION['user_id']);


        if($this->db->execute()){
            return true;
        }else {
            return false;
        }


    }


    public function myReports(){
        

        $this->db->query('SELECT reID,emri, dt_raportimit, description, address, foto
                              FROM status s INNER JOIN report r on s.sID=r.sID
                              LEFT JOIN users u on r.uID=u.uID
                              where r.uID=:sessionID');


        $this->db->bind(':sessionID', $_SESSION['user_id']);

        $result = $this->db->resultSet();

        return $result;


    }

}

?>  
