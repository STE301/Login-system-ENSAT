<?php 
session_start();
if(isset($_SESSION['user'])){
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menuPrincipale.css">
    
    <title>Plateforme de l'ENSAT</title>
<style>
.table1 {
    border-collapse: collapse;
    width: 80%;
    border: solid black 2px;
    margin-left: 10%;
    margin-right: 10%;
    background-color: beige;
}
th, td {
    text-align: left;
    padding: 8px;
    border: solid black 2px;
}

/*tr:nth-child(even){
    background-color: 
}*/
.h11{
    text-align:center;
    color: black;
    margin-top: 7%;
}
.h12{
    text-align:center;
    color: black;
}
.tete{
    background-color: #3399FF;
}
body{
    background-color: #DEEBFA;
}
    </style>
</head>
<body>
<?php
    require "MySQL.php";

$sql1 = "SELECT * FROM eleves ;";
$res1 = mysqli_query($mysqli,$sql1);
?>
<thead>
<nav class="nav-horizontal">
  <div class="mask">
    <ul class="list">
      <li><a class="men" href="allMembers.php">Liste des étudiants</a></li>
      <li><a class="men" href="nouveauEtudiant.php">Ajouter un étudiant</a></li>
      <li><a class="men"href="deconnexion.php">Se déconnecter</a></li>
    </ul>
  </div>        
</nav>
</thead>
<tbody>
<h1 class="h11">Bienvenue <?=$_SESSION['user']?> !</h1>;
<h2 class="h12">****************</h2>
<h2 class="h12">Liste des étudiants</h2>
<h2 class="h12">****************</h2>
<br>
        <table class="table1">
            <tr class="tete">
                <td>CNE</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Adresse</td>
                <td>Ville</td>
                <td>Email</td>
                <td>Photo d'identité</td>
                <td>Etat</td>
                <td>Action</td>
            </tr>
            <?php   // LOOP TILL END OF DATA 
                while ($rows=mysqli_fetch_array($res1)) {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['CNE'];?></td>
                <td><?php echo $rows['Nom'];?></td>
                <td><?php echo $rows['Prenom'];?></td>
                <td><?php echo $rows['Adresse'];?></td>
                <td><?php echo $rows['Ville'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><img src="<?php echo $rows['Photo'];?>" width="100%"></td>
                <td><?php echo $rows['etat'];?></td>
                <td>
                <center><a href="update.php?editid=<?php echo htmlentities ($rows['ID_eleve']);?>"><button>Modifier</button></a> </center><br>
                <center><a href="delete.php?delid=<?php echo ($rows['ID_eleve']);?>" class="delete" onclick="return confirm('Do you really want to Delete ?');"><button>Supprimer</button></a> </center>
                </td>
                
            </tr>
            <?php
                }
             ?>
        </table> 
        <br>
        <br>
        <!--<center><a href="inscription.php"> <button>Ajouter un nouveau membre</button></a></center> <br> <br>
        <center><a href="bienvenue.php" ><button>Retour</button> </a></center> <br> <br> <br>-->
</tbody>
</body>
</html>
<?php 
}else{
    header('location:index.html?reponse=\"Violation d\'accés\"');
}
?>