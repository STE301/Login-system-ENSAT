<?php
if(isset($_POST['user']) && isset($_POST['pass'])){
    $compte = $_POST['user'];
    $pass   = $_POST['pass'];  
//paramètres d'accès au serveur base de données MySQL    
  require_once "MySQL.php";
// Create connection and Check connection
if (!$mysqli) {
  echo "Échec lors de la connexion à MySQL : " . mysqli_connect_error();
}else{
//Connected successfully to MYSQL server
/* requête à executer */
$sql = "INSERT INTO comptes  VALUES ('','$compte','$pass')";
$result = mysqli_query($mysqli,$sql);
if ($result) {
  header("location:./compte.php");
}else {
    header("location:./inscription.php?error");
}
}
}
?>