<?php


class indexModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getNews(){
        $this->db->query('SELECT foto,title,published,description FROM news');

        $result = $this->db->resultSet();

        return $result;
    }


}