<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscription</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/menuPrincipale.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5" >
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
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="ajoutMembers.php" method="post" enctype="multipart/form-data">
				<h2>Ajouter un nouveau étudiant</h2>
				<div class="form-row">
					<label for="full-name">CNE</label>
					<input type="text" name="cne" id="cne" class="input-text" placeholder="CNE" required="true" >
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="full-name">NOM</label>
					<input type="text" name="nom" id="nom" class="input-text" placeholder="Nom" required="true" >
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="full-name">Prénom</label>
					<input type="text" name="prenom" id="prenom" class="input-text" placeholder="Prénom" required="true" >
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="full-name">Adresse</label>
					<input type="text" name="adresse" id="adresse" class="input-text" placeholder="Adresse" require="true"d >
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="full-name">Ville</label>
					<input type="text" name="ville" id="ville" class="input-text" placeholder="Ville de résidence" required="true" >
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Email</label>
					<input type="text" name="email" id="your-email" class="input-text" placeholder="Email" required="true" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
				<input type="file" class="form-control" name="profilepic"  required="true"> <br>
				<span style="color:red; font-size:12px;">Fichier jpg / jpeg/ png /gif obligatoire.</span>
				</div>      
				<div class="form-row-last">
					<input type="submit" name="ajout" class="register" value="Ajouter">
				</div>
				</div>
			</form>
		</div>
	</div>
</tbody>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>