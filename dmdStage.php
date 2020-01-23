<?php

include_once './racine.php';
?>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Favicons Icon -->
        <link rel="icon" href="images/logoOrmvad.png" type="image/logoOrmvad.png" />
        <link rel="shortcut icon" type="image/logoOrmvad.png" href="images/logoOrmvad.png" />

        <!-- Page Title Here -->
        <title>ORMVAD - Demande de Stage</title>
        
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
                <?php include 'header.php'; ?>
            <!-- Header End -->
            
            <!-- Content -->
            <div class="page-content">
                <!-- inner page banner -->
                <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
                    <div class="container">
                        <div class="dez-bnr-inr-entry">
                            <h1 class="text-white">Stage</h1>
                        </div>
                    </div>
                </div>
                <!-- inner page banner END -->
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <div class="container">
                        <ul class="list-inline">
                            <li><a href="index.php">Accueil</a></li>
                            <li>Carrières / Demande de stage</li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb row END -->
                <!-- contact area -->
                <div class="section-full content-inner bg-white contact-style-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-a30 bg-gray clearfix m-b30 ">
                                    <div style="padding-left: 320px;">
                                         <h2 class=" text-uppercase font-30 m-t30 p-r100 m-tb10"><i></i> <u>Remplissez le formulaire</u></h2>
                                    </div>
                                    <div class="dzFormMsg"></div>
                                    
                                    <form method="post" action="controller/addDemandeStage.php" onSubmit="return verify(this.password, this.confirmMdp)">
                                            <div style="padding-left:px;"><h5 class="m-b1" style="color: #E50305;">(*) Champ obligatoire</h5></div>
                                            <h3 class="m-b10 m-t0">Information de base </h3>
                                            <div class="dez-separator-outer ">
                                                <div class="dez-separator bg-primary style-skew"></div>
                                            </div> 
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5 class="m-b5">Civilité *</h5>
                                                    <select name="civilite">
                                                        <option value="Mr" >Monsieur</option>
                                                        <option value="Mme">Madame</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Nom *</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="nom" type="text" required class="form-control" placeholder="Vôtre nom..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Prénom *</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="prenom" type="text" required class="form-control" placeholder="Vôtre prénom..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Date de naissance *</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="datedenaissance" type="date" required class="form-control" placeholder="Vôtre date de naissance..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Adresse *</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="adresse" type="text" required class="form-control" placeholder="Vôtre adresse..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Téléphone *</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="telephone" type="text" required class="form-control" placeholder="Vôtre téléphone..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Email *</h5>
                                                <div class="form-group">
                                                    <div class="input-group"> 
                                                        <input name="email" type="text" class="form-control" required  placeholder="Vôtre email..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Mot de passe *</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="mdp" id="mdp" type="password" required class="form-control" placeholder="Vôtre mot de passe..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Confirmer mot de passe *</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="mdp1" id="mdp1"type="password" required class="form-control" placeholder="Confirmer vôtre mot de passe..">
                                                        <span id="verifynote" class="warn hidden" style="color: red;">Mot de passe incorrecte !</span>
                                                    </div>
                                                </div>
                                            </div>
					    <div class="col-md-4">
                                                <h5 class="m-b5">Niveau d'étude *</h5>
                                                <select name="niveau" id="niveau" class="selection-1">
                                                     <option hidden >Niveau d'etude</option>
                                                         <?php
                                                          include_once RACINE.'/services/NiveauEtude.php';
                                                          $ne = new NiveauEtudeServices();
                                                          foreach ($ne->findAll() as $n) {
                                                         ?>
                                                     <option value="<?php echo $n->getId(); ?>"><?php echo $n->getNiveauEtude(); ?></option>
                                                         <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                               <h5 class="m-b5">Spécialite *</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="specialite" type="text" required class="form-control" placeholder="Vôtre Spécialité..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Etablissement *</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="etablissement" type="text" required class="form-control" placeholder="Vôtre Etablissement..">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <h3 class="m-b10 m-t0">Détails de votre demande de stage </h3>
                                            <div class="dez-separator-outer ">
                                                <div class="dez-separator bg-primary style-skew"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Type de stage *</h5>
                                                <select name="typestage" id="typestage" class="selection-1">
                                                     <option hidden >Type de stage</option>
                                                         <?php
                                                          include_once RACINE.'/services/TypeStageServices.php';
                                                          $ts = new TypeStageServices();
                                                          foreach ($ts->findAll() as $t) {
                                                         ?>
                                                     <option value="<?php echo $t->getId(); ?>"><?php echo $t->getType(); ?></option>
                                                         <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Date Début *</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="datedebut" type="date" required class="form-control" placeholder="Début période de stage">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Date Fin *</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="datefin" type="date" required class="form-control" placeholder="fin période de stage..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Département *</h5>
                                                <select name="departement" id="departement" class="selection-1">
                                                     <option hidden >Département Souhaité</option>
                                                         <?php
                                                          include_once RACINE.'/services/DepartementServices.php';
                                                          $de = new DepartementServices();
                                                          foreach ($de->findAll() as $d) {
                                                         ?>
                                                     <option value="<?php echo $d->getId(); ?>"><?php echo $d->getNomdept(); ?></option>
                                                         <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">CV *</h5>
                                                    <div class="input-group">
                                                        <input name="cv" type="file">
                                                    </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="m-b5">Demande de stage *</h5>
                                                    <div class="input-group">
                                                        <input name="demandestage" type="file">
                                                    </div>
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 40px; padding-left:10px;">
                                                <button name="submit" type="submit" value="submit" class="site-button"> <span>Postuler</span> </button>
                                            </div>
                                        </div>
                                    </form>
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
