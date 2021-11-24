<?php 

//CONNESSIONE AL DB

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "login_db";

$connessione = new mysqli($hostname,$username,$password,$database);

if ($connessione === false){
    die("Errore connessione al server : " . $connessione->connect_error);
}

?>