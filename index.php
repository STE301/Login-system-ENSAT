<!DOCTYPE html>
<html lang="en">
<head>
	<title>Plateforme ENSA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logoENSAT.png"/>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" method="post" action="connexion.php">
					<div class="login100-form-avatar">
						<img src="images/logoENSAT.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Espace de connexion
					</span>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Ce champ est obligatoire">
						<input class="input100" type="text" name="user" placeholder="Nom d'utilisateur" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Ce champ est obligatoire">
						<input class="input100" type="password" name="pass" placeholder="Mot de passe" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-10">
						<input type="submit" name="connexion" value="Connexion" class="login100-form-btn">
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="inscription.php" class="txt1">
							Vous n'avez pas un compte ? S'inscrire
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>