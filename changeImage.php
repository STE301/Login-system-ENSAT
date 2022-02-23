<?php 
//Database Connection
require_once('MySQL.php');
session_start();
$_SESSION['userid']=$_GET['userid'];
if(isset($_SESSION['userid']))
  {
    if(isset($_POST['submit']))
  {
$uid=$_GET['userid'];
//getting the post values
 $ppic=$_FILES["profilepic"]["name"];
$oldppic=$_POST['oldpic'];
$oldprofilepic="photos"."/".$oldppic;
// get the image extension
$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
$folder = './photos/';
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Format invalide. Only jpg / jpeg/ png /gif format allowed');</script>";
}else{
//rename the image file
$imgnewfile=$folder.$ppic;
// Code for move image into directory
move_uploaded_file($_FILES["profilepic"]["tmp_name"],$imgnewfile);
// Query for data insertion
$query=mysqli_query($mysqli, "UPDATE eleves SET Photo='$imgnewfile' where ID_eleve='$uid' ");
if ($query){
//Old pic deletion
unlink($oldprofilepic);
echo "<script>alert('Chargement réussi');</script>";
echo "<script type='text/javascript'> document.location ='allMembers.php'; </script>";
}else{
echo "<script>alert('Il y a eu une erreur. Réessayer');</script>";
 }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Document</title>
</head>
<body>
<div class="page-content">
<div class="form-v5-content">
<form  method="POST" enctype="multipart/form-data" class="form-detail">

<?php
$eid=$_GET['userid'];
$ret=mysqli_query($mysqli,"SELECT * from eleves where ID_eleve='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
 
<h2>Changer la photo de l'étudiant</h2>
<input type="hidden" name="oldpic" value="<?php  echo $row['Photo'];?>">
<div class="form-row">
<img src="<?php echo $row['Photo'];?>" width="120" height="120">
</div>
 
<div class="form-row">
<input type="file" class="form-control" name="profilepic"  required="true">
<span style="color:red; font-size:12px;">Fichier jpg / jpeg/ png /gif obligatoire.</span>
</div> 
 <br>
 <div class="form-row-last">
<input type="submit" class="register" name="submit" value="Update">
</div>
<br>

<center><a href="allMembers.php">Annuler</a></center>
</form>
<?php }?>
<?php }?>
</body>
</html>