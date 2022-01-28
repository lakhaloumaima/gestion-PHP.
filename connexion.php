<?php
// Connexion à la bdd
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "bdmedicaments";
try {
$cnx = new PDO("mysql: host=$db_server; dbname=bdmedicaments", 'root', '');
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}