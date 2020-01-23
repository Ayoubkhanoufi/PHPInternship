<?php
@session_start();

include_once './racine.php';
include_once RACINE . '/Connexion/connexion.php';

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
        <title>ORMVAD - Office Régional de Mise en Valeur Agricole</title>

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
                    <!-- Slider -->
                    <div class="main-slider style-two default-banner" id="home">
                        <div class="tp-banner-container">
                            <div class="tp-banner" >
                                <div id="rev_slider_1175_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="duotone192" data-source="gallery" style="background-color:transparent;padding:0px;">
                                    <!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
                                </div>        
                            </div>        
                        </div>        
                    </div>        
                    <!-- Slider END -->

                    <!-- About Us -->
                    <div class="section-full about-us bg-white content-inner dez-about">
                        <div class="container">
                            <div class="tab-content">
                                <div class="row">
                                    <div class="col-md-5  about-img m-b30">
                                        <img src="images/img1.jpg" alt=""/>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="m-b20">
                                            <h3 class="h5 ">Bienvenue à l'espace d'<span class="text-primary">administration</span></h3>
                                            <div class="clear"></div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 m-b15">
                                                <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center dashed">
                                                    <div class="icon-bx-sm text-primary radius border-1 m-b5 dashed"> <a href="#" class="icon-cell"><i class="glyphicon glyphicon-bullhorn"></i></a> </div>
                                                    <div class="icon-content">
                                                        <?php
                                                            $cn = new Connexion();
                                                            $connexion = $cn->getConnexion(null);
                                                            $query = $connexion->prepare("select * from stage");
                                                            $query->execute(); 
                                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                            $demande=$query->rowCount();
                                                        ?>
                                                        <h5 class="h5 text-primary"><span class="counter"><?php echo htmlentities($demande);?></span>+</h5>
                                                        
                                                        <h5 class="h7">Demandes de stage</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 m-b15">
                                                <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center dashed" >
                                                    <div class="icon-bx-sm text-primary radius border-1 m-b5 dashed"> <a href="#" class="icon-cell"><i class="glyphicon glyphicon-ok"></i></a> </div>
                                                    <div class="icon-content">
                                                        <?php
                                                            $cn = new Connexion();
                                                            $connexion = $cn->getConnexion(null);
                                                            $query = $connexion->prepare("select * from stage where etat='Valider'");
                                                            $query->execute(); 
                                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                            $Valider=$query->rowCount();
                                                        ?>
                                                        <h5 class="h5 text-primary"><span class="counter"><?php echo htmlentities($Valider);?></span>+</h5>
                                                        <h5 class="h7">Demandes Validées</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 m-b15">
                                                <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center dashed">
                                                    <div class="icon-bx-sm text-primary radius border-1 m-b5 dashed"> <a href="#" class="icon-cell"><i class="glyphicon glyphicon-remove"></i></a> </div>
                                                    <div class="icon-content">
                                                        <?php
                                                            $cn = new Connexion();
                                                            $connexion = $cn->getConnexion(null);
                                                            $query = $connexion->prepare("select * from stage where etat='Annuler'");
                                                            $query->execute(); 
                                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                            $Annuler=$query->rowCount();
                                                        ?>
                                                        <h5 class="h5 text-primary"><span class="counter"><?php echo htmlentities($Annuler);?></span>+</h5>
                                                        <h5 class="h7">Demandes Annulées</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 m-b15">
                                                <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center dashed">
                                                    <div class="icon-bx-sm text-primary radius border-1 m-b5 dashed"> <a href="#" class="icon-cell"><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i></a> </div>
                                                    <div class="icon-content">
                                                        <?php
                                                            $cn = new Connexion();
                                                            $connexion = $cn->getConnexion(null);
                                                            $query = $connexion->prepare("select * from stage where etat='En cour'");
                                                            $query->execute(); 
                                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                            $encour=$query->rowCount();
                                                        ?>
                                                        <h5 class="h5 text-primary"><span class="counter"><?php echo htmlentities($encour);?></span>+</h5>
                                                        <h5 class="h7">Demandes en cour</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-arrow-circle green">
                                            <li><a href="consulterStagiaire.php">Consulter les stagiaires</a></li>
                                            <li><a href="consulterStage.php">Consulter les stages</a></li>
                                            <li><a href="ajouterNiveauType.php">Gestion niveau d'etude - type de stage</a></li>
                                            <li><a href="consulterResRH.php">Gestion RH</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Us END -->

                    <!-- Testimonials -->


                   <!-- <div class="section-full bg-white content-inner dez-about-appoint">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="dez-thum disnone-sm"><img src="images/img2.jpg" alt=""></div>
                                </div>	
                                <div class="col-md-7">
                                    <h3 class="h3">Laissez votre <span class="text-primary"> Opinion</span></h3>
                                    <p class="m-b10">
                                        <strong>
                                            <ul class="list-arrow">
                                                <li>Quelle impression vous avez vis-à-vis notre Office de Mise en Valeur Agricole ?</li>
                                                <li>Quelle est votre impression concernant nos prestations ?</li>
                                                <li>Que proposez-vous à nôtre office dans le cadre d'amélioration de ses services ?</li>
                                            </ul>
                                        </strong>
                                    </p>
                                    <p class="m-b30">
                                        Veuillez remplir le formulaire en dessous tout en laissant votre point de vue en ce qui concerne nôtre office et ses prestations.
                                    </p>
                                    
                                    <div class="clearfix bg-white p-a30 about-appoint">
                                        
                                        <form method="post" action="opinion.php">
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input name="nom" type="text" required class="form-control" placeholder="Vôtre nom..">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group"> 
                                                            <input name="prenom" type="text" class="form-control" required  placeholder="Vôtre prénom..">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input name="tel" type="text" required class="form-control" placeholder="Vôtre téléphone..">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input name="mail" type="email" required class="form-control" placeholder="Vôtre email..">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <textarea name="msg" rows="4" class="form-control" required placeholder="Vôtre message..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button name="submit" type="submit" value="Submit" class="site-button outline"> <span>Partager opinion</span> </button>
                                                </div>
                                            </div>
                                        </form>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content END-->
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
