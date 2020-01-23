<?php
@session_start();

include_once './racine.php';
include_once RACINE . '/Connexion/connexion.php';

if(empty($_SESSION['LOGIN']) ||empty($_SESSION['MDP'])){
   header("location:./Login/view/indexview.php");  
}
else{
if(isset($_GET['ida']))
{
    $id=$_GET['ida'];
    $cn = new Connexion();
    $connexion = $cn->getConnexion(null);
    $result = $connexion->prepare("update stage set etat='Annuler'  WHERE id=$id");
    $result->execute(); 
    header('location:consulterStage.php');
}

if(isset($_GET['idv']))
{
    $id=$_GET['idv'];
    $cn = new Connexion();
    $connexion = $cn->getConnexion(null);
    $result = $connexion->prepare("update stage set etat='Valider'  WHERE id=$id");
    $result->execute(); 
    header('location:consulterStage.php');
}
}
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Favicons Icon -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

        <!-- Page Title Here -->
        <title>ORMVAD - Liste des Stages</title>
        
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

        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900" rel="stylesheet"><link rel="stylesheet" type="text/css" href="error-404.html" />

        <!-- Revolution Slider Css -->
        <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.min.css">

        <!-- Revolution Navigation Style -->
        <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.min.css">

    </head>


    <body id="bg">
        
        <div id="loading-area"></div>
            <div class="page-wraper">
            
            <!-- Header start -->
                <?php include 'headerAdmin.php'; ?>
            <!-- Header End -->
            
            <!-- Content -->
            <div class="page-content">
                <!-- inner page banner -->
                <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
                    <div class="container">
                        <div class="dez-bnr-inr-entry">
                            <h1 class="text-white">Liste des stages</h1>
                        </div>
                    </div>
                </div>
                <!-- inner page banner END -->
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <div class="container">
                        <ul class="list-inline">
                            <li><a href="javascript:;">Administration</a></li>
                            <li>Liste des Stage</li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb row END -->
                <!-- contact area -->
                <div class="section-full content-inner bg-title contact-style-1">
                    <div class="container">
                        <div class="row">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th><center>#</center></th>
                                  <th><center>Departement</center></th>
                                  <th><center>Stagiaire</center></th>
                                  <th><center>Type stage</center></th>
                                  <th><center>Date demande</center></th>
                                  <th><center>Début stage</center></th>
                                  <th><center>Fin stage</center></th>
                                  <th><center>Supprimer</center></th>
                                  <th><center>Modifier</center></th>
                                  <th><center>Action</center></th>
                                </tr>
                              </thead>
                              <tbody>
                                    <?php 
                                    include_once RACINE.'/services/StageServices.php';
                                    $es = new StageServices();
                                    include_once RACINE.'/services/StagiaireServices.php';
                                    $st = new StagiaireServices();
                                    include_once RACINE.'/services/DepartementServices.php';
                                    $dp = new DepartementServices();
                                    include_once RACINE.'/services/TypeStageServices.php';
                                    $ts = new TypeStageServices();

                                    foreach ($es->findAll() as $e) {
                                        $nom = $st->findById($e->getIdStagiaire())->getNom();
                                        $prenom = $st->findById($e->getIdStagiaire())->getPrenom();
                                        $idS = $e->getId();
                                        ?>
                
                                    <tr class="odd gradeX">
                                        
                                        <td><center><?php echo $e->getId(); ?></center></td>
                                        <td><center><?php echo $dp->findById($e->getIdDept())->getNomdept(); ?></center></td>
                                        <td><center><?php echo $nom.' '.$prenom ?></center></td>
                                        <td><center><?php if($e->getidTypeStage()!=NULL){echo $ts->findById($e->getidTypeStage())->getType();} ?></center></td>
                                        <td><center><?php echo $e->getDateDemande(); ?></center></td>
                                        <td><center><?php echo $e->getDateDebut(); ?></center></td>
                                        <td><center><?php echo $e->getDateFin(); ?></center></td>
                                        
                                        <td style="text-align:center; vertical-align:middle;" >
                                            <a onclick="deleteme(<?php echo $idS ?>)" class="btn btn-success btn-danger" style="border-radius: 7px;"><em class="fa fa-times "></em></a></div> 
                                        </td>
                                        <td style="text-align:center; vertical-align:middle;" >
                                            <a href="modifierStage.php?&id=<?php echo $idS ?>" class="btn btn-success btn-default" style="border-radius: 7px;"><em class="fa fa-pencil "></em></a></div> 
                                        </td>
                                        <td style="text-align:center; vertical-align:middle;" >
                                            <?php if($e->getEtat()=="En cour"){?>
                                                <a href="consulterStage.php?idv=<?php echo $idS;?>"><button class="btn btn-primary" style="border-radius: 7px;"><i class="fa fa-edit "></i>Valider </button>
                                                <a href="consulterStage.php?ida=<?php echo $idS;?>" onclick="return confirm('annuler?');" style="border-radius: 7px;">  <button class="btn btn-danger"><i class="fa fa-pencil"></i>Annuler </button>

                                              <?php   }if($e->getEtat()=="Valider"){  ?>
                                                <a href="#" class="btn btn-info btn-xs" style="border-radius: 7px;"> Demande validée </a>
                                              <?php  }if($e->getEtat()=="Annuler"){ ?>
                                                <a href="#" class="btn btn-warning btn-xs" style="border-radius: 7px;"> Demande annulée </a>
                                              <?php }?>
                                        </td>
                                     </tr>  
                                     <?php  } ?>
                                       
                              </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
                <!-- contact area  END -->
                </div>
            <!-- Footer start -->
                <?php include 'footer.php'; ?>
            <!-- Footer End -->
            
            <!-- scroll top button -->
            <button class="scroltop fa fa-chevron-up" ></button>
                
        </div>
        <!-- JavaScript  files ========================================= -->
        <!-- JavaScript  files ========================================= -->

        <script src="js/combine.js"></script>
        <script  src="plugins/scroll/scrollbar.min.js"></script>
        <!-- switcher fuctions  -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_YEzHx_YCQvqQSB_xuSC18BT81BlKVvI&amp;sensor=false"></script>
        <!-- google map  --><script src='../../www.google.com/recaptcha/api.js'></script>
        <!-- google api for recaptcha  -->
        <script src="js/dz.ajax.js"></script>
        <script lang="javascript">
            function deleteme(delid)
            {
                if(confirm("Voulez vous supprimer le stagiaire ?")){
                    window.location.href='controller/deletestage.php?id='+delid+'';
                }   
            }
        </script>
        <!-- dz ajax fuctions  -->
        <!-- revolution JS FILES -->
            <!-- revolution JS FILES -->
        <script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script  src="js/rev.slider.js"></script>
        <script >
        
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_1();
        });	/*ready*/
        </script>
    </body>

</html>
