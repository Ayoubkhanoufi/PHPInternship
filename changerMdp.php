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
        <title>ORMVAD - Mot de passe</title>
        
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
			<?php include 'Navigation.php'; ?>
		</div>
        <div style="width:875px;" class="col-md-9">
            <div class="profile-content">
                       <div class="row panel panel-success" style="margin-top:2%;">
            <div class="panel-heading lead">
                <div class="row">
                    <div class="col-lg-8 col-md-8"><i class="fa fa-users"></i> Mise à jour de votre compte</div>
                </div>
            </div>
            <div class="panel-body">
                						
                
                                                          
                    <div class="row">
                        <div class="col-lg-12 col-md-12">

                            <div class="row">
                                <div class="col-lg-12 col-md-9" >
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="" class="text-success"><i class="fa fa-indent"></i> Changement du Mot de passe</a></li>   
                                    </ul>
                                    <div class="tab-content">
                                        <div id="Summery" class="tab-pane fade in active">
                                        
                                        <form method="POST" action="controller/ModifierMDP.php">
                                            <input value='<?php echo $_SESSION['IDs']; ?>' name="id" type="hidden" class="form-control">
                                            <?php
                                             /*include_once './racine.php';
                                             include_once RACINE.'/Services/StagiaireServices.php';
                                            $st = new StagiaireServices();

                                            $id=$_SESSION['IDs'];
                                            $sta=$st->findBysessi($id);*/
                                            ?>
                                            <div class="table-responsive panel">
                                                <table class="table">
                                                    <tbody> 
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-key"></i> Ancien mot de passe : *</td>
                                                                <td style="padding-right: 200px;"><input style="font-style: oblique;" class="form-control" name="" type="password" > </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-key"></i> Le nouveau mot de passe : *</td>
                                                                <td style="padding-right: 200px;"><input style="font-style: oblique;" class="form-control" id="mdp" name="mdp" type="password"  >                                                              </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-key"></i> Confirmer le nouveau mot de passe : *</td>
                                                                <td style="padding-right: 200px;"><input style="font-style: oblique;" class="form-control" id="mdp1" name="mdp1" type="password" >
                                                                                                  <span id="verifynote" class="warn hidden" style="color: red;"> Mot de passe incorrecte !</span>                
                                                                </td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                                
                                                <div class="col-lg-3" style="padding-top: 30px;">
                                                    <button name="submit" type="submit" value="Submit" class="btn btn-success btn-block" style="border-radius: 7px;"> <span ><i class="fa fa-check"></i> Enregistrer</span></button>
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 30px;">
                                                    <a href="statistiqueStagiaire.php" class="btn btn-danger btn-block" style="border-radius: 7px;"><i class="fa fa-close"></i> Annuler</a>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                        
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                <!-- /.table-responsive -->
                
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
        <script src="js/jquery-1.8.1.min.js" type="text/javascript"></script>
        <script>
	    $(document).ready(function(){
	            $('#mdp1').keyup(function(){
	                if($(this).val()==$('#mdp').val()){
	                   $('#verifynote').addClass('hidden');
	                   }else{
	                   $('#verifynote').removeClass('hidden');
	                   }
	               }); 
	            });
        </script>
</html>
        
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>