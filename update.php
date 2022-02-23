<?php 
//paramètres d'accès au serveur base de données MySQL    
require_once "MySQL.php";

if(isset($_POST['modifier'])){
    $eid=$_GET['editid'];

  $cne = $_POST['cne'];
  $nom   = $_POST['nom'];
  $prenom   = $_POST['prenom'];
  $adresse  = $_POST['adresse'];
  $ville  = $_POST['ville'];
  $email   = $_POST['email']; 

  $query=mysqli_query($mysqli, "UPDATE eleves set CNE='$cne',Nom='$nom', Prenom='$prenom', Adresse='$adresse', Ville='$ville', email='$email' where ID_eleve='$eid'");
 
  if ($query) {
  echo "<script>alert('Modifications réussies');</script>";
  echo "<script type='text/javascript'> document.location ='allMembers.php'; </script>";
  }
  else
  {
  echo "<script>alert('Erreur. Réessayer');</script>";
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
    <style>
        body{
            background-color: rgb(0, 127, 255);
        }
        .main{
            border: solid 1px black;
            width: 40%;
            margin-left: 25%;
            margin-right: 30%;
            margin-top: 10%;
            background-color:beige; 
        }
        .bouton{
            font-size: 20px;
        }

    </style>
</head>
</head>
<body>
<div class="page-content">
<div class="form-v5-content">
<form  method="POST" class="form-detail">
 <?php
 require_once "MySQL.php";
$eid=$_GET['editid'];
$ret=mysqli_query($mysqli," SELECT* FROM eleves WHERE ID_eleve='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
 <h2> Modifier des informations sur cet étudiant</h2>
<div class="form-row">
<img src="<?php  echo $row['Photo'];?>" width="120" height="120">
<a href="changeImage.php?userid=<?php echo $row['ID_eleve'];?>">Changer l'image</a>
</div>
 <br> <br>
 <div class="form-row">
<input type="text" class="input-text" name="cne" value="<?php  echo $row['CNE'];?>" required="true">
</div>
 
<div class="form-row">
<input type="text" class="input-text" name="nom" value="<?php  echo $row['Nom'];?>" required="true">
</div>

<div class="form-row">
<input type="text" class="input-text" name="prenom" value="<?php  echo $row['Prenom'];?>" required="true">
</div>

<div class="form-row">
<input type="text" class="input-text" name="adresse" value="<?php  echo $row['Adresse'];?>" required="true">
</div>
<div class="form-row">
<input type="text" class="input-text" name="ville" value="<?php  echo $row['Ville'];?>" required="true">
</div>
		
<div class="form-row">
<input type="text" class="input-text" name="email" required="true" value="<?php  echo $row['email'];?>">
</div>    
<?php 
}
?>
 <br>
 <div class="form-row-last">
 <input type="submit" name="modifier" class="register" value="Enregistrer">
 </div>
 <center><a href="allMembers.php">Annuler</a></center>
 </div>
</form>
</div>
</div>
</body>
</html>