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
        <link rel="icon" href="images/logoOrmvad.png" type="image/logoOrmvad.png" />
        <link rel="shortcut icon" type="image/logoOrmvad.png" href="images/logoOrmvad.png" />

        <!-- Page Title Here -->
        <title>ORMVAD - Modifier Encadrant</title>
        
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
                            <h1 class="text-white">Gestion encadrant</h1>
                        </div>
                    </div>
                </div>
                <!-- inner page banner END -->
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <div class="container">
                        <ul class="list-inline">
                            <li><a href="adminStagiaire.php">Gestion encadrant</a></li>
                            <li>Modifier encadrant</li>
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
                                    
                                    <h2 class="text-center">Nouvelle informations</h2>
                                    <div class="dzFormMsg"></div>
                                    
                                    <form method="post" action="controller/ModifierEncadrant.php" onSubmit="return verify(this.password, this.confirmMdp)">
                                        
                                        <input value='<?php echo $_GET['id']; ?>' name="id" type="hidden">
                                        <?php
                                         include_once './racine.php';
                                         include_once RACINE.'/Services/EncadrantServices.php';
					$en = new EncadrantServices();

                                        $id=$_GET['id'];
                                        $enc=$en->findById($id);
                                        ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Civilité*</h5>
                                                    <select name="civilite">
                                                        <option value="Mr" >Monsieur</option>
                                                        <option value="Mme">Madame</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Nom*</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="nom" type="text" required class="form-control" value="<?php echo $enc->getNom(); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Prenom*</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="prenom" type="text" required class="form-control" value="<?php echo $enc->getPrenom(); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <h5>Adresse*</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="adresse" type="text" required class="form-control" value="<?php echo $enc->getAdresse(); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Téléphone*</h5>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="telephone" type="text" required class="form-control" value="<?php echo $enc->getTelephone(); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Email*</h5>
                                                <div class="form-group">
                                                    <div class="input-group"> 
                                                        <input name="email" type="text" class="form-control" required  value="<?php echo $enc->getEmail(); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Departement*</h5>
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
                                            
                                            <div class="col-lg-3" style="padding-top: 100px;">
                                                <button name="submit" type="submit" value="Submit" class="site-button " style="border-radius: 7px;"> <span>Enregistrer</span> </button>
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
        <script type="text/javascript">
            var fieldalias="mot de passe"
            function verify(element1, element2)
             {
              var passed=false
               if (element1.value=='')

                alert("Veuillez entrer votre "+fieldalias+" dans le premier champ!")
                element1.focus()
               }
              else if (element2.value=='')
               {
                alert("Veuillez confirmer votre "+fieldalias+" dans le second champ!")
                element2.focus()
               }

               else if (element1.value!=element2.value)
               {
                alert("Les deux "+fieldalias+" ne condordent pas")
                element1.select()
            .
               }
               else
               passed=true
               return passed
             }
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
