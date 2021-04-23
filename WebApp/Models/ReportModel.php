<?php


class ReportModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addReport($data)
    {
        $this->db->query('INSERT INTO report(emri,mbiemri,dt_raportimit,description,foto,city,address, sID,categoryID, Emergency) 
                              VALUES (:name,:lastName,:date,:textField,:file,:city,:address,:sID,:cID, :Emergency)');
        //Bind values

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':lastName', $data['lastName']);
        $this->db->bind(':file', $data['file']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':sID', $data['sID']);
        $this->db->bind(':cID', $data['cID']);
        $this->db->bind(':Emergency', $data['emergency']);
        $this->db->bind(':textField', $data['textField']);


        //Exetute function

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}