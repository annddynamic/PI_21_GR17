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

    public function countNews()
    {
        $this->db->query('SELECT COUNT(nID) FROM news');

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



    public function getOnDuty(){
        $this->db->query('SELECT name, surname FROM users u WHERE inDuty=1');

        $result = $this->db->resultSet();

        return $result;

    }

    public function getAvailable(){
        $this->db->query('SELECT name, surname FROM users u WHERE inDuty=0');

        $result = $this->db->resultSet();

        return $result;

    }

    public function getEmergencyReports(){

        $this->db->query('SELECT emri, dt_raportimit, gjendja, name, foto
                              FROM status s INNER JOIN report r on s.sID=r.sID
                              INNER JOIN users u on r.uID=u.uID
                              WHERE Emergency =1');


//        SELECT emri, dt_raportimit, foto, gjendja, uID FROM report r
//                              INNER JOIN status s on r.sID= s.sID
//                              WHERE Emergency =0

        $result = $this->db->resultSet();

        return $result;

    }

    public function getReports(){

        $this->db->query('SELECT emri, dt_raportimit, gjendja, name, foto
                              FROM status s INNER JOIN report r on s.sID=r.sID
                              INNER JOIN users u on r.uID=u.uID
                              WHERE Emergency =0');

        $result = $this->db->resultSet();

        return $result;

    }

    public function getFeedback(){

        $this->db->query('SELECT title, Mesazhi, data, uID FROM feedback f 
                              INNER JOIN users u ON f.uID=u.uID');

        $result = $this->db->resultSet();

        return $result;
    }

    public function addFeedback($data){

        $this->db->query('INSERT INTO feedback (name , subject,mesazhi, dt_feedback) 
                              VALUES(:name,:subject,:mesazhi,NOW())');

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':mesazhi', $data['mesazhi']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}