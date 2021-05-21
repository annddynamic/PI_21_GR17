<?php

require_once ("../WebApp/Models/Database.php");
$db = new Database();

$db->query("DROP TABLE categories");
$db->execute();
echo "Tabela category u fshi me sukses!\n";

$db->query("DROP TABLE uesrs");
$db->execute();
echo "Tabela users u fshi me sukses!\n";


$db->query("DROP DATABASE crs");
$db->execute();
echo "db u fshi me sukses \n";






