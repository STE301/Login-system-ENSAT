<?php 
//paramètres d'accès au serveur base de données MySQL    
require_once "MySQL.php";
session_start();
$_SESSION['delid']=$_GET['delid'];
//Code for deletion
if(isset($_SESSION['delid']))
{
$rid=$_GET['delid'];
$sql="DELETE FROM eleves WHERE ID_eleve='$rid'";
$rst=mysqli_query($mysqli,$sql);
if($rst){
    header('location:./allMembers.php');
}
}else{
    header('location:allMembers.php?reponse=\"Violation d\'accés\"');
}
?>