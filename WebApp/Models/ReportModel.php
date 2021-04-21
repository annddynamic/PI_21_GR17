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
        $this->db->query('INSERT INTO report(emri,mbiemri,dt_raportimit,description,foto,city,address, sID,categoryID) 
                              VALUES (:emri,:lastName,:gender,:birthday,:street,:city,:country,:zipCode,:phoneNumber)');
        //Bind values

        $this->db->bind(':emri', $data['name']);
        $this->db->bind(':lastName', $data['lastName']);
        $this->db->bind(':gender', $data['file']);
        $this->db->bind(':birthday', $data['date']);
        $this->db->bind(':country', $data['address']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':zipCode', $data['sID']);
        $this->db->bind(':phoneNumber', $data['cID']);
        $this->db->bind(':street', $data['textField']);


        //Exetute function

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}