<?php 
//Databse Connection file
require_once('MySQL.php');

if(isset($_POST['cne']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['email']) && isset($_FILES['profilepic'])){
  session_start();
  $cne = $_POST['cne'];
  $nom   = $_POST['nom'];
  $prenom   = $_POST['prenom'];
  $adresse  = $_POST['adresse'];
  $ville  = $_POST['ville'];
  $email   = $_POST['email']; 
  $ppic=$_FILES["profilepic"]["name"];
// get the image extension
$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
// allowed extensions
$allowed_extensions = array(".jpg",".jpeg",".png",".gif");
$folder = './photos/';
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Format invalide. Fichier jpg / jpeg/ png /gif obliatoire');</script>";
}
else
{
//rename the image file
$imgnewfile=$folder.$ppic;
// Code for move image into directory
move_uploaded_file($_FILES["profilepic"]["tmp_name"],$imgnewfile);
// Query for data insertion
$query=mysqli_query($mysqli, "INSERT INTO eleves VALUES ('','$cne','$nom','$prenom','$adresse','$ville','$email','$imgnewfile', '0');");
if ($query) {
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='allMembers.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}}
}
?>