<?php

class Database {

   private $host = "localhost";
   private $user="root";
   private $pwd ="";
   private $dbName="crime-report-system";

   private $statement;
   private $dbHandler;
   private $error;

    public function __construct() {
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
            $options = array(
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
            );
        try{
            $this->dbHandler =new PDO($dsn, $this->user,$this->pwd, $options);
        }catch (PDOException $ex){
            die($ex->getMessage());
        }
    }


   // Method that allows to write queries

    public function query($sql){
       $this->statement=$this->dbHandler->prepare($sql);
    }

    public function bind($parameter, $value, $type=null){
       switch(is_null($type)){
           case is_int($value):
               $type=PDO::PARAM_INT;
               break;
           case is_bool($value):
               $type=PDO::PARAM_BOOL;
               break;
           case is_null($value):
               $type=PDO::PARAM_NULL;
               break;
           default:
               $type=PDO::PARAM_STR;
       }

       $this->statement->bindValue($parameter, $value, $type);
    }

    // Execute prepared statement

    public function execute(){
       return $this->statement->execute();
    }

    // Return an array
    public function resultSet(){
       $this->execute();
       return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
    // return specific row

    public function single(){
       $this->execute();
       return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    // Row count
    public function rowCount(){
       return $this->statement->rowCount();
    }
}