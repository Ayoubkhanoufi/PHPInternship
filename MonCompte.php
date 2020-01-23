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
        <title>ORMVAD - Mon compte</title>
        
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
                                <div class="col-lg-3 col-md-3">
                                    
                                        <!--<img src="https://lh5.googleusercontent.com/proxy/EkYugv9KzLUfAIpv-P4g6b0_mKxhcsfTvNmVueDn6XDHQp_SA0_hG2YFVAwB0Lbj_S-LrT-OtYsvxXMCrkZZMCmBfwelTQaAZW6GZwMQ8bRLwEvZonc0k0NxUpkhLBDuApx25K735rZfyHCIqA1RVpSdU84HF7U-j3xAwt3XLevAJtr5pwaVnRUC=w120-h120" class="img-responsive img-thumbnail">
                                            <!-- Modal -->
                                                    <!-- /.modal-content -->
                                </div>
                                                <!-- /.modal-dialog -->
                            </div>
                                            <!-- /.modal -->                    
                                    
                                    <!--<div class="table-responsive panel">
                                        <table class="table">
                                            <tbody>
                                                    <tr>
                                                        <td class="text-center">
                                                            <span class="btn btn-danger text-success btn-block"><i class="fa fa-rupee"></i> Unpaid</span>
                                                            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#PhotoOption"><i class="fa fa-photo"></i> Change</a>
                                                        </td>
                                                    </tr>
                                                            							
                                            </tbody>
                                        </table>
                                    </div>-->
                                        
                                    <?php 
                                    include_once RACINE.'/services/StagiaireServices.php';
                                    $es = new StagiaireServices();
                                    include_once RACINE.'/services/NiveauEtude.php';
                                    $ts = new NiveauEtudeServices();
                                    
                                    $Session=$_SESSION['IDs'];
                                    
                                    foreach ($es->findInfo($Session) as $e) {
                                        $civilite = $e->getCivilite();
                                        ?>
                                    
                                </div>
                                <div class="col-lg-12 col-md-9" >
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="" class="text-success"><i class="fa fa-indent"></i> Informations personnelles</a></li>
                                        <div class="col-lg-5 col-md-10" style="padding-left: 200px;">
                                            <div class="btn-group text-center">
                                                <a href="ModifierMonCompte.php?id=<?php echo $e->getId(); ?>" class="btn btn-success btn-sm btn-default" style="border-radius: 7px;"><i class="fa fa-edit fa-1x"></i></a>
                                                <a href="" class="btn btn-info btn-sm btn-default" style="border-radius: 7px;"><i class="fa fa-print fa-1x"></i></a>
                                            </div>
                                        </div>
                                    </ul>
                                        
                                    <div class="tab-content">
                                        <div id="Summery" class="tab-pane fade in active">

                                            <div class="table-responsive panel">
                                                <table class="table">
                                                    <tbody>
                                                            <tr>
                                                                <td class="text-info"> # Identifiant</td>
                                                                <td><?php echo $e->getId();?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-user"></i> Nom Complet</td>
                                                                <td><?php echo $e->getNom().' '.$e->getPrenom();?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-home"></i> Adresse</td>
                                                                <td><?php echo $e->getAdresse();?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="glyphicon glyphicon-phone"></i> Téléphone</td>
                                                                <td><?php echo $e->gettelephone();?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-envelope-o"></i> Email</td>
                                                                <td><?php echo $e->getEmail();?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-calendar"></i> Date de naissance</td>
                                                                <td><?php echo $e->getDatenaissance();?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-graduation-cap"></i> Niveau d'étude</td>
                                                                <td><?php echo $ts->findById($e->getIdNiveau())->getNiveauEtude();?></td>                                                                  </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-cog"></i> Specialite</td>
                                                                <td><?php echo $e->getSpecialite();?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-university"></i> Etablissement</td>
                                                                <td><?php echo $e->getEtablissement();?></td>
                                                            </tr>
                                                            <!--<tr>
                                                                <td class="text-info"><i class="fa fa-university"></i> MDP</td>
                                                                <td><?php echo $e->getMdp();?></td>
                                                            </tr>-->
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-book"></i> CV</td>
                                                                <td><?php echo $e->getCv();?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-bookmark"></i> Demeande de stage</td>
                                                                <td><?php echo $e->getDemandestage();?></td>
                                                            </tr>   
                                                    </tbody>
                                                </table>
                                    <?php } ?>
                                            </div>
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

</html>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>