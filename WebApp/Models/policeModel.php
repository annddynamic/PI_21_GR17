<?php 


Class PoliceModel extends Database {
    private $db;
    private $db1;

    public function __construct()
    {
        $this->db = new Database();
        $this->db1 = new Database();
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

        $this->db1->query('UPDATE users
        SET inDuty=1
        WHERE uID=:uID');

        $this->db1->bind(':uID', $_SESSION['user_id']);


        if($this->db->execute() && $this->db1->execute()){
            return true;
        }else {
            return false;
        }


    }

    public function myReports(){
        

        $this->db->query('SELECT reID,emri, dt_raportimit, description, address, foto
                              FROM status s INNER JOIN report r on s.sID=r.sID
                              LEFT JOIN users u on r.uID=u.uID
                              WHERE r.uID=:sessionID and s.sID=2');


        $this->db->bind(':sessionID', $_SESSION['user_id']);

        $result = $this->db->resultSet();

        return $result;


    }

    public function finishReport($data){


        $this->db->query('UPDATE report
                              SET sID=3
                              WHERE reID=:reID');

        $this->db->bind(':reID', $data['uID']);

        $this->db1->query('UPDATE users
                               SET inDuty=0
                               WHERE uID=:uID');

        $this->db1->bind(':uID', $_SESSION['user_id']);

        if($this->db->execute() && $this->db1->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function finishedReports(){

        $this->db->query('SELECT reID,emri, dt_raportimit, description, address, foto
                              FROM status s INNER JOIN report r on s.sID=r.sID
                              LEFT JOIN users u on r.uID=u.uID
                              WHERE r.uID=:sessionID and s.sID=3');

        $this->db->bind(':sessionID', $_SESSION['user_id']);

        $result = $this->db->resultSet();

        return $result;


    }

    public function allMyReports(){
        $this->db->query('SELECT reID,emri, dt_raportimit, description, address, foto
        FROM status s INNER JOIN report r on s.sID=r.sID
        LEFT JOIN users u on r.uID=u.uID
        where r.uID=:sessionID and  ');
    }

    public function getCitizens()
    {
        $this->db->query('SELECT name,surname,gender,data_lindjes,rruga,email,role_name 
                              FROM users u INNER JOIN roles r ON u.role_ID = r.role_ID 
                              WHERE u.role_ID=3');

        $result = $this->db->resultSet();

        sort($result);

        return $result;
    }
}

?>  
