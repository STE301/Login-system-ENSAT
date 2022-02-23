<?php
//paramètres pour accéder au serveur base de données MySQL    
$dbservername = "localhost";
$dbusername =  "root";
$dbpassword =  "";
$dbname =  "dbensat" ;
$mysqli = mysqli_connect("localhost", "root", "", "dbensat");

if(!$mysqli){
    die("connection failed: ");
    exit();
}

?>