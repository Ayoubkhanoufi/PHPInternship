<?php
@session_start();

include_once './racine.php';

if(empty($_SESSION['LOGINs']) ||empty($_SESSION['MDPs'])){
   header("location:./Login/view/indexview.php");  
}
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Favicons Icon -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- Page Title Here -->
        <title>ORMVAD - Statistique</title>
        
        <!-- Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/skin/skin-1.css" class="skin">
        <link rel="stylesheet" type="text/css" href="css/templete.css">
        <link rel="stylesheet" type="text/css" href="css/switcher.css">
        <link rel="stylesheet" type="text/css" href="css/compte.css">

        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900" rel="stylesheet"><link rel="stylesheet" type="text/css" href="error-404.html" />

        <!-- Revolution Slider Css -->
        <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.min.css">

        <!-- Revolution Navigation Style -->
        <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.min.css">

    </head>

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

            <!-- Header start -->
                <?php include 'headerStagiaire.php'; ?>
            <!-- Header End -->

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<!--<div class="profile-userpic">
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>-->
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
                                        <div style="padding-bottom: 20px;"  class="profile-">
                                            <img src="images/Etud.jpg" class="img-responsive img-thumbnail" style="border-radius: 50px;">
                                            <!--<img src="" class="img-responsive" alt="">-->
                                        </div>
					<div class="profile-usertitle-name">
						<?php $Nom=$_SESSION['NOMs'];
                                                      $Prenom=$_SESSION['PRENOMs'];
                                                     echo $Nom.' '.$Prenom;
                                                ?>
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="statistiqueStagiaire.php">
							<i class="glyphicon glyphicon-dashboard"></i>
							Tableau de bord </a>
						</li>
						<li>
							<a href="MonCompte.php">
							<i class="glyphicon glyphicon-user"></i>
							Mon Compte </a>
						</li>
						<li>
							<a href="Mademande_Stage.php">
							<i class="glyphicon glyphicon-bullhorn"></i>
							Mes demandes </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
                                
				<!-- END MENU -->
			</div>
		</div>
        <div style="width:875px;" class="col-md-9">
            <div class="profile-content">
                <div class="row panel panel-success" style="margin-top:2%;">
                    <div class="panel-heading lead">
                        <div class="row">
                            <div class="col-lg-8 col-md-8"><i class="fa fa-pencil"></i> Mettre à jour votre</div>
                        </div>
                    </div>
                        <div class="table-responsive panel">
                                        <table class="table">
                                            <tbody>
                                                    <tr>
                                                        <td class="text">
                                                            <a href="ModifierMonCompte.php?id=<?php echo $_SESSION['IDs']; ?>" class="btn btn-default " style="border-radius: 20px;"><i class="fa fa-user"></i> Informations</a>
                                                            <a href="Modifier_Demande_Bord.php?id=<?php echo $_SESSION['IDs']; ?>" class="btn btn-default " style="border-radius: 20px;"><i class="fa fa-bullhorn"></i> Demande</a>
                                                            <a href="#" class="btn btn-default " style="border-radius: 20px;"><i class="fa fa-user"></i> Mot de Passe</a>
                                                        
                                                        </td>
                                                    </tr>
                                                            							
                                            </tbody>
                                        </table>
                                    </div> 
                </div>
                
            </div>
		</div>
	</div>
</div>
                
                <!-- Footer start -->
                <br>
                </br>
                    <?php include 'footer_stagiaire.php'; ?>
                <!-- Footer End -->


</html>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>