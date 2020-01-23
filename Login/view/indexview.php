<?php 

include("../../racine.php");
include("../../Connexion/connexion.php");
$connexion = new Connexion();
session_start();

if(isset($_POST['bauthentification'])){
    if(!empty($_POST['login']) && !empty($_POST['mdp'])){
        $query="select * from responsablerh where login='".$_POST['login']."' and mdp='".$_POST['mdp']."'";
        $statement = $connexion->getConnexion()->prepare($query);
        $statement->execute(
                array(
                    'login' =>$_POST['login'],
                    'mdp' => $_POST['mdp']
                )
                );
        $count=$statement->rowCount();
        if($count > 0)
        {
            $query="select * from responsablerh where login='".$_POST['login']."' and mdp='".$_POST['mdp']."'";
            $req = $connexion->getConnexion()->prepare($query);
            $req->execute();
            $res= $req->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["ID"]=$res[0]['id'];
            $_SESSION["NOM"]=$res[0]['nom'];
            $_SESSION["LOGIN"]=$res[0]['login'];
            $_SESSION["MDP"]=$res[0]['mdp'];

                                 if($_SESSION["LOGIN"]==$_SESSION["LOGIN"] && $_SESSION["MDP"]==$_SESSION["MDP"])
                                 {
                                    header("location:../../statistiqueAdmin.php");
                                 }
        }
        
    }
    if(!empty($_POST['login']) && !empty($_POST['mdp'])){
        $query="select * from stagiaire1 where email='".$_POST['login']."' and mdp='".$_POST['mdp']."'";
        $statement = $connexion->getConnexion()->prepare($query);
        $statement->execute(
                array(
                    'login' =>$_POST['login'],
                    'mdp' => $_POST['mdp']
                )
                );
        $count=$statement->rowCount();
        if($count > 0)
        {
            $query="select * from stagiaire1 where email='".$_POST['login']."' and mdp='".$_POST['mdp']."'";
            $req = $connexion->getConnexion()->prepare($query);
            $req->execute();
            $res= $req->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["IDs"]=$res[0]['id'];
            $_SESSION["NOMs"]=$res[0]['nom'];
            $_SESSION["PRENOMs"]=$res[0]['prenom'];
            $_SESSION["LOGINs"]=$res[0]['email'];
            $_SESSION["MDPs"]=$res[0]['mdp'];
            $_SESSION["DATEs"]=$res[0]['datenaissance'];
            $_SESSION["ETABLISSEMENTs"]=$res[0]['etablissement'];
                                     
                                     header("location:../../statistiqueStagiaire.php");           
        }

    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
                            <form action="" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-30">
						Connexion
					</span>
                                        <span class="login60-form-title p-l-90">
						Accéder à l'espace Admin
					</span>
					<!--<span class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR">
					</span>-->

					<div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="login">
						<span class="focus-input100" data-placeholder="Nom d'utilisateur"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="mdp">
						<span class="focus-input100" data-placeholder="Mot de passe"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="bauthentification" class="login100-form-btn">
							Se connecter
						</button>
					</div>

					<ul class="login-more p-t-90" style="padding-left: 70px;" >
                                                <!--<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>-->

                                                <li>
							<span class="txt5">
								Revenir a la page 
							</span>

							<a href="../../index.php" class="txt2">
								d'acceuil
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>