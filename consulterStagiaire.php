 <?php
@session_start();

include_once './racine.php';

if(empty($_SESSION['LOGIN']) ||empty($_SESSION['MDP'])){
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

        <!-- Page Title Here -->
        <title>ORMVAD - Liste des stagiaires</title>
        
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
                            <h1 class="text-white">Liste des stagiaires</h1>
                        </div>
                    </div>
                </div>
                <!-- inner page banner END -->
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <div class="container">
                        <ul class="list-inline">
                            <li><a href="javascript:;">Administration</a></li>
                            <li>Ma demande</li>
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
                                  <th><center>Nom & Prénom</center></th>
                                  <th><center>Niveau d'etude</center></th>
                                  <th><center>Spécialité</center></th>
                                  <th><center>Etablissement</center></th>
                                  <th><center>Actions</center></th>
                                  <th><center>Details</center></th>
                                </tr>
                              </thead>
                              <tbody>
                                    <?php 
                                    include_once RACINE.'/services/StagiaireServices.php';
                                    $es = new StagiaireServices();
                                    include_once RACINE.'/services/NiveauEtude.php';
                                    $ts = new NiveauEtudeServices();

                                    foreach ($es->findAll() as $e) {
                                        $civilite = $e->getCivilite();
                                        ?>
                
                                  <tr class="odd gradeX">
                                        
                                        <td><center><?php echo $e->getId();  ?></center></td>
                                        <td><center><?php echo $civilite .' '.$e->getNom().' '.$e->getPrenom(); ?></center></td>
                                        <td><center><?php if($e->getIdNiveau()!=NULL){echo $ts->findById($e->getIdNiveau())->getNiveauEtude();} ?></center></td>
                                        <td><center><?php echo $e->getSpecialite(); ?></center></td>
                                        <td><center><?php echo $e->getEtablissement(); ?></center></td>
                                        <td style="text-align:center; vertical-align:middle;" >
                                            <a onclick="deleteme(<?php echo $e->getId(); ?>)" class="btn btn-success btn-danger" style="border-radius: 7px;"><em class="fa fa-times "></em></a></div> 
                                        
                                            <a href="modifierstagiaire.php?&id=<?php echo $e->getId(); ?>" class="btn btn-success btn-default" style="border-radius: 7px;"><em class="fa fa-pencil "></em></a></div> 
                                        </td>
                                        <td style="text-align:center; vertical-align:middle;" >
                                            <a onclick="//details(<?php echo $e->getId(); ?>)" style="border-radius: 7px;"  href="" class="btn btn-success btn-info" data-toggle="modal"  data-target="#myModal">Voir details
                                            </a>
                                        </td>
                                        
                                     </tr>  
                                     <?php } ?>
                                              
                              </tbody>
                            </table> 
                            
                                        <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <!-- Modal Header -->
                                      <div class="modal-header" style="background-color: #079559">
                                          <h3 class="modal-title"><center>Details</center></h3>
                                      </div>

                                      <!-- Modal body -->
                                     <div class="modal-body">
                                        <div class="row">
                                            <table class="table table-hover">
                                              <thead>
                                                <tr>
                                                  <th><center>Adresse</center></th>
                                                  <th><center>Téléphone</center></th>
                                                  <th><center>Email</center></th>
                                                  <th><center>Date de naissance</center></th>
                                                  <th><center>Cv</center></th>
                                                  <th><center>Demande de stage</center></th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                    <?php 
                                                    include_once RACINE.'/services/StagiaireServices.php';
                                                    $es = new StagiaireServices();
                                                    include_once RACINE.'/services/NiveauEtude.php';
                                                    $ts = new NiveauEtudeServices();

                                                    foreach ($es->findAll() as $e) {
                                                        $civilite = $e->getCivilite();
                                                        ?>

                                                  <tr class="odd gradeX">

                                                        <td><center><?php echo $e->getAdresse(); ?></center></td>
                                                        <td><center><?php echo $e->getTelephone(); ?></center></td>
                                                        <td><center><?php echo $e->getEmail(); ?></center></td>
                                                        <td><center><?php echo $e->getDateNaissance(); ?></center></td>
                                                        <td><object data="fichier.pdf" type="application/pdf" width="350" height="200">
                                                        <param name="filename" value="fichier.pdf" /> 
                                                        <a href="<?php $e->getDemandeStage(); ?>" title="le fichier"><?php echo $e->getDemandeStage(); ?></a>
                                                      </object></td>
                                                        <td><center><?php echo $e->getDemandeStage(); ?></center></td>
                                                     <?php } ?>

                                              </tbody>
                                            </table>
                                      </div>

                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      </div>

                                    </div>
                                  </div>
                                </div>

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
                    window.location.href='controller/deletestagiaire.php?id='+delid+'';
                }   
            }
        </script>
        
        <script lang="javascript">
            function details(detid)
            {
                if(confirm("Voulez vous supprimer le stagiaire ?")){
                window.location.href='controller/detailstagiaire.php?id='+detid+'';
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
