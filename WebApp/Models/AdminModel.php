<?php

class AdminModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
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

    public function addFeedback($data){

        $this->db->query('INSERT INTO feedback (name,subject,mesazhi,dt_feedback) 
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

    public function deleteFeedback($data){


        $this->db->query('DELETE FROM feedback WHERE fID=:id');

        $this->db->bind(':id', $data['fID']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function deleteReport($data){


        $this->db->query('DELETE FROM report WHERE reID=:id');

        $this->db->bind(':id', $data['uID']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function deleteNews($data){


        $this->db->query('DELETE FROM news WHERE nID=:id');
        //Bind values

        $this->db->bind(':id', $data['uID']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }


    public function editUser($data){

        $this->db->query('UPDATE users
                              SET name=:name, surname=:lastName, rruga=:address, nr_telefonit=:telephone 
                              WHERE uID=:uID');

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':lastName', $data['lastName']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':telephone', $data['telephone']);
        $this->db->bind(':uID', $data['uID']);


        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
    }


    public function getUsers()
    {
        $this->db->query('SELECT name,surname,gender,data_lindjes,rruga,email,role_name 
                              FROM users u INNER JOIN roles r ON u.role_ID = r.role_ID');

        $result = $this->db->resultSet();

        sort($result);

        return $result;
    }

    public function getCitizens()
    {
        $this->db->query('SELECT uID, name,surname,rruga,nr_telefonit FROM users WHERE role_ID=3');

        $result = $this->db->resultSet();

        return $result;
    }

    public function getNews(){
        $this->db->query('SELECT nID, foto,title,published,description FROM news');

        $result = $this->db->resultSet();

        return $result;
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

        $this->db->query('SELECT reID, emri, dt_raportimit, gjendja, name, foto
                              FROM status s INNER JOIN report r on s.sID=r.sID
                              LEFT JOIN users u on r.uID=u.uID
                              WHERE Emergency =1');

        $result = $this->db->resultSet();

        return $result;

    }

    public function getRandomeReports(){

        $this->db->query('SELECT reID,emri, dt_raportimit, gjendja, name, foto
                              FROM status s INNER JOIN report r on s.sID=r.sID
                              LEFT JOIN users u on r.uID=u.uID
                              WHERE Emergency =0');

        $result = $this->db->resultSet();

        return $result;

    }

    public function getUserByName(){
        $this->db->query('SELECT name from users');

        $result = $this->db->resultSet();

        return $result;
    }

    public function getFeedback(){

        $this->db->query('SELECT fID, name, subject, mesazhi, dt_feedback FROM feedback');

        $result = $this->db->resultSet();

        rsort($result);

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

    public function countCitizens()
    {
        $this->db->query('SELECT COUNT(name) FROM users WHERE role_ID=3');

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

    public function countFeedback()
    {
        $this->db->query('SELECT COUNT(name) FROM feedback ');

        $result = $this->db->resultSet();

        return $result;
    }


    public function pendingApproval()
    {
        $this->db->query('SELECT uID,name,surname FROM pending_users WHERE role_ID=2');

        $result = $this->db->resultSet();

        return $result;
    }

    public function policeOfficials()
    {
        $this->db->query('SELECT uID, name,surname,rruga,nr_telefonit FROM users WHERE role_ID=2');

        $result = $this->db->resultSet();

        return $result;
    }


    public function searchPolice($data)
    {
        $this->db->query('SELECT uID, name,surname,rruga,nr_telefonit FROM users 
                              WHERE name LIKE :name and role_ID=2');
        $this->db->bind(':name', "$data%");
        $result = $this->db->resultSet();

        return $result;

    }

    public function searchUser($data)
    {
        $this->db->query('SELECT name,surname,gender,data_lindjes,rruga,email,role_name
                              FROM users u INNER JOIN roles r ON u.role_ID = r.role_ID
                              WHERE name LIKE :name');
        $this->db->bind(':name', "$data%");
        $result = $this->db->resultSet();

        return $result;

    }

    public function searchFeedback($data)
    {
        $this->db->query('SELECT fID, name, subject, mesazhi, dt_feedback 
                              FROM feedback 
                              WHERE name LIKE :name');
        $this->db->bind(':name', "$data%");
        $result = $this->db->resultSet();

        return $result;

    }

    public function searchReport($data)
    {
        $this->db->query('SELECT reID,emri, dt_raportimit, gjendja, name, foto
                              FROM status s INNER JOIN report r on s.sID=r.sID
                              LEFT JOIN users u on r.uID=u.uID 
                              WHERE emri LIKE :emri ');
        $this->db->bind(':emri', "$data%");
        $result = $this->db->resultSet();

        return $result;

    }

    public function searchNews($data)
    {
        $this->db->query('SELECT nID, foto,title,published,description 
                              FROM news
                              WHERE title LIKE :title');
        $this->db->bind(':title', "$data%");
        $result = $this->db->resultSet();

        return $result;

    }

    public function searchCitizen($data)
    {
        $this->db->query('SELECT uID, name,surname,rruga,nr_telefonit 
                              FROM users
                              WHERE role_ID=3 and name LIKE :name');
        $this->db->bind(':name', "$data%");
        $result = $this->db->resultSet();

        return $result;

    }

//    public function searchReport($data)
//    {
//        $this->db->query('SELECT reID, emri, dt_raportimit, gjendja, name, foto
//                              FROM status s INNER JOIN report r on s.sID=r.sID
//                              LEFT JOIN users u on r.uID=u.uID
//                              WHERE name LIKE :name');
//        $this->db->bind(':name', "$data%");
//        $result = $this->db->resultSet();
//
//        return $result;



}