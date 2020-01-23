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
        <title>ORMVAD - Niveau d'étude - Type stage</title>
        
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
            
              <script src="js/jquery-1.8.1.min.js"></script>
            <script src="js/ajax.js" type="text/javascript"></script>  
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
                            <h1 class="text-white">Gestion Niveau d'étude - Type stage</h1>
                        </div>
                    </div>
                </div>
                <!-- inner page banner END -->
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <div class="container">
                        <ul class="list-inline">
                            <li><a href="ajouterNiveauType.php">Gestion Niveau d'étude - Type stage</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb row END -->
                <!-- contact area -->
                <div class="section-full content-inner bg-white contact-style-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="p-a30 bg-gray clearfix m-b30 ">
                                    
                                    <h2 class="text-center">Ajouter un nouveau niveau d'etude</h2>
                                    <div class=""></div>
                                    
                                    <form method="post" action="controller/addNiveauEtude.php">
                                        
                                      <div class="dez-accordion" id="accordion1" style="padding-right: 50px;">
                                        <div class="panel" >
                                            <div class="acod-head" >
                                                <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseOne1" data-parent="#accordion1"><i class="fa fa-graduation-cap"></i> Liste des niveaux d'étude </a> </h5>
                                            </div>
                                            <div id="collapseOne1" class="acod-body collapse in">
                                                <div class="acod-content">
                                                    <?php 
                                                        include_once RACINE.'/services/NiveauEtude.php';
                                                        $es = new NiveauEtudeServices();
                                                        foreach ($es->findAll() as $e) {
                                                    ?>
                                                    
                                                        <ul class="list-angle-right">
                                                            <li><?php echo $e->getNiveauEtude();?>
                                                             
                                                                <a onclick="deleteme(<?php echo $e->getId(); ?>)" class="pull-right action-buttons" style="padding-left:10px;"><em class="fa fa-remove" ></em></a>
                                                                
                                                                <a href="ModifierResponsable.php?&id=<?php echo $e->getId(); ?>" class="pull-right action-buttons"><em class="fa fa-pencil" ></em></a>
                                                            </li>
                                                        </ul>    
                                                    <?php } ?>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="acod-head">
                                                <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseTwo1" class="collapsed" data-parent="#accordion1"><i class="fa fa-pencil-square-o"></i> Ajouter un niveau </a> </h5>
                                            </div>
                                            <div id="collapseTwo1" class="acod-body collapse">
                                                <div class="col-md-9" style="padding-top: 15px">
                                                    <div class="form-group">
                                                        <div class="input-group"> 
                                                            <input name="niveau" type="text" class="form-control" required  placeholder="Ajouter un niveau d'étude.. ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3" style=" padding-top : 15px; padding-left: 15px;">
                                                    <button name="submit" type="submit" value="Submit" class="site-button " style="border-radius: 7px;"> <span>Ajouter</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                    </form>
                                    
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-sm-6">
                                <div class="p-a30 bg-gray clearfix m-b30 ">
                                    
                                    <h2 class="text-center">Ajouter nouveau type de stage</h2>
                                    <div class=""></div>
                                    
                                    <form id="myForm" method="post" action="controller/addTypeStage.php">
                                        
                                      <div class="dez-accordion" id="accordion2" style="padding-right: 50px;">
                                        <div class="panel" >
                                            <div class="acod-head" >
                                                <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseOne2" data-parent="#accordion2"><i class="fa fa-list-ol"></i> Liste des Types de stage </a> </h5>
                                            </div>
                                            <div id="collapseOne2" class="acod-body collapse in">
                                                <div class="acod-content">
                                                    <?php 
                                                        include_once RACINE.'/services/TypeStageServices.php';
                                                        $ty = new TypeStageServices();
                                                        foreach ($ty->findAll() as $t) {
                                                    ?>
                                                    
                                                        <ul class="list-angle-right">
                                                            <li><?php echo $t->getType();?>
                                                             
                                                                <a onclick="deletemeT(<?php echo $t->getId(); ?>)" class="pull-right action-buttons" style="padding-left:10px;"><em class="fa fa-remove" ></em></a>
                                                                
                                                                <a href="ModifierResponsable.php?&id=<?php echo $t->getId(); ?>" class="pull-right action-buttons"><em class="fa fa-pencil" ></em></a>
                                                            </li>
                                                        </ul>    
                                                    <?php } ?>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="acod-head">
                                                <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseTwo2" class="collapsed" data-parent="#accordion2"><i class="fa fa-pencil-square-o"></i> Ajouter un type </a> </h5>
                                            </div>
                                            <div id="collapseTwo2" class="acod-body collapse">
                                                <div class="col-md-9" style="padding-top: 15px">
                                                    <div class="form-group">
                                                        <div class="input-group"> 
                                                            <input name="type" type="text" class="form-control" required  placeholder="Ajouter un type de stage.. ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3" style=" padding-top : 15px; padding-left: 15px;">
                                                    <button id="sub" class="site-button " style="border-radius: 7px;"> <span>Ajouter</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                      </div> 
                                    </form>
                                    
                                    <span id="result"></span>
                                
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
        <script src="js/rev.slider.js"></script>
        <script >
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_1();
        });	/*ready*/
        </script>
            
        <script lang="javascript">
            function deleteme(delid)
            {
                if(confirm("Voulez vous supprimer le niveau ?")){
                    window.location.href='controller/deleteniveau.php?id='+delid+'';
                }   
            }
        </script>
        <script lang="javascript">
            function deletemeT(delid)
            {
                if(confirm("Voulez vous supprimer le type ?")){
                    window.location.href='controller/deleteTypeStage.php?id='+delid+'';
                }   
            }
        </script>
            
    </body>

</html>
