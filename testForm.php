<!DOCTYPE html>
<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Favicons Icon -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

        <!-- Page Title Here -->
        <title>ORMVAD - Demande de Subvention</title>
        
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
                            <h1 class="text-white">Subvention</h1>
                        </div>
                    </div>
                </div>
                <!-- inner page banner END -->
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <div class="container">
                        <ul class="list-inline">
                            <li><a href="index.php">Accueil</a></li>
                            <li>Demande d'une subvention relative à l'équipement d'une parcelle agricole en matériel d'irrigation localisée</li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb row END -->
                <!-- contact area -->
                <div class="bg-white">
                    <div class="container">
                        <div class="row">
                            <!-- Left part start -->
                           
                                <div class="p-a30 bg-gray clearfix m-b30 ">
                                    <h2><u>Notre guichet unique vous garantis le bon traitement de votre dossier</u></h2>
                                    
                                    <form method="post" action="tf2.php">
                                        
                                      <fieldset> 
                                        <div class="form-group">
                                          <label for="nom">Nom</label>
                                          <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom..">
                                        </div>
                                        <div class="form-group">
                                          <label for="prenom">Prénom</label>
                                          <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prenom..">
                                        </div>
                                        <div class="form-group">
                                          <label for="cin">CIN</label>
                                          <input type="text" class="form-control" id="cin" name="cin" placeholder="Votre CIN..">
                                        </div>
                                        <div class="form-group">
                                          <label for="adresse">Adresse</label>
                                          <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse..">
                                        </div>
                                        <div class="form-group">
                                          <label for="telephone">Téléphone</label>
                                          <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Votre téléphone..">
                                        </div>
                                        <div class="form-group">
                                          <label for="email">Email</label>
                                          <input type="email" class="form-control" id="email" name="mel" placeholder="Votre email..">
                                        </div>
                                        <div class="form-group">
                                          <label for="numTitreFoncier">Titre Foncier</label>
                                          <input type="text" class="form-control" id="numTitreFoncier" name="numTitreFoncier" placeholder="Votre Titre Foncier..">
                                        </div>
                                        <div class="form-group">
                                          <label for="commune">Commune</label>
                                          <input type="text" class="form-control" id="commune" name="commune" placeholder="Votre commune..">
                                        </div>
                                        <div class="form-group">
                                          <label for="province">Province</label>
                                          <input type="text" class="form-control" id="province" name="province" placeholder="Votre province..">
                                        </div>
                                        <div class="form-group">
                                          <label for="numBE">Numéro Bureau d'études</label>
                                          <input type="text" class="form-control" id="numBE" name="numBE" placeholder="Numéro de votre bureau d'études..">
                                        </div>
                                        <div class="form-group">
                                          <label for="telBE">Téléphone Bureau d'études</label>
                                          <input type="text" class="form-control" id="telBE" name="telBE" placeholder="téléphone de votre bureau d'études..">
                                        </div>
                                        <div class="form-group">
                                          <label for="faxBE">Fax Bureau d'études</label>
                                          <input type="text" class="form-control" id="faxBE" name="faxBE" placeholder="Fax de votre bureau d'études..">
                                        </div>
                                         <div class="form-group">
                                          <label for="textDemande">Demande</label>
                                          <input type="text" class="form-control" id="textDemande" name="textDemande" placeholder="Votre demande..">
                                        </div> 
                                        <!-- <div class="form-group">
                                          <label for="textDemande">Demande</label>
                                          <input type="file" class="form-control-file" id="textDemande" name="textDemande">
                                        </div> -->
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </fieldset>
                                    </form>
                                </div>
                           
                            <!-- Left part END -->
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
