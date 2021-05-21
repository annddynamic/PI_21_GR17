<?php

require_once ("../WebApp/Models/Database.php");
$db = new Database();
//

$sql="CREATE TABLE categories (
    cID int(11) AUTO_INCREMENT,
    emri varchar(25) NOT NULL,
    emergency tinyint(1) NOT NULL,
    PRIMARY KEY (cID)
 )";

$db->query($sql);
$db->execute();
echo "Tabela categories u krijua me sukses!";

$sql= "CREATE TABLE uesrs (   
   uID int(11) NOT NULL,
   name varchar(45) NOT NULL,
   surname varchar(45) NOT NULL,
   gender enum('male','female','other') NOT NULL,
   data_lindjes date NOT NULL,
   rruga varchar(45) DEFAULgT NULL,
   qyteti  varchar(45)  DEFAULT NULL,
   shteti varchar(45) DEFAULT NULL,
   ZIP int(11) DEFAULT NULL,
   nr_telefonit varchar(45) DEFAULT NULL,
   email varchar(45) NOT NULL,
   password varchar(255) NOT NULL,
   inDuty tinyint(4) DEFAULT NULL,
   PRIMARY KEY (uID)

)";

$db->query($sql);
$db->execute();
echo "Tabela users u krijua me sukses!";













?>

