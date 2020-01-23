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
        <title>ORMVAD - Contact</title>
        <!-- Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--[if lt IE 9]>
                <script src="http://gardenzone.dexignlab.com/xhtml/js/html5shiv.min.js"></script>
                <script src="http://gardenzone.dexignlab.com/xhtml/js/respond.min.js"></script>
            <![endif]-->
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
        <link  rel="stylesheet" type="text/css" href="css/templete.css">
        <link  rel="stylesheet" type="text/css" href="css/switcher.css">
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900" rel="stylesheet">
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
                                    <h1 class="text-white">Contactez-nous</h1>
                                </div>
                            </div>
                        </div>
                        <!-- inner page banner END -->
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <div class="container">
                                <ul class="list-inline">
                                    <li><a href="index.php">Accueil</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Breadcrumb row END -->

                <!-- contact area -->
                <div class="section-full content-inner bg-white contact-style-1">
                    <div class="container">
                        <div class="row">
                            <!-- Left part start -->
                            <div class="col-md-8">
                                <div class="p-a30 bg-gray clearfix m-b30 ">
                                    <h2>Envoyez vôtre message</h2>
                                    
                                    <form method="post" action="contactSave.php">
                                    <!-- <input type="hidden" value="Contact" name="dzToDo" > -->
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
                                                        <input name="mail" type="email" class="form-control" required  placeholder="Vôtre email.." >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="prenom" type="text" required class="form-control" placeholder="Vôtre prénom..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="telephone" type="text" required class="form-control" placeholder="Vôtre numéro..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <textarea name="msg" rows="4" class="form-control" required placeholder="Vôtre Message..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button name="submit" type="submit" value="Submit" class="site-button "> <span>Envoyer</span> </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Left part END -->
                            <!-- right part start -->
                            <div class="col-md-4">
                                <div class="p-a30 m-b30 border-1 contact-area">
                                    <h2 class="m-b10">Quick Contact</h2>
                                    <p>If you have any questions simply use the following contact details.</p>
                                    <ul class="no-margin">
                                        <li class="icon-bx-wraper left m-b30">
                                            <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                            <div class="icon-content">
                                                <h6 class="text-uppercase m-tb0 dez-tilte">Adresse:</h6>
                                                <p>Avenue Mohamed VI, BP 58, El Jadida</p>
                                            </div>
                                        </li>
                                        <li class="icon-bx-wraper left  m-b30">
                                            <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                            <div class="icon-content">
                                                <h6 class="text-uppercase m-tb0 dez-tilte">Fax:</h6>
                                                <p>0523-34-22-72</p>
                                            </div>
                                        </li>
                                        <li class="icon-bx-wraper left">
                                            <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                            <div class="icon-content">
                                                <h6 class="text-uppercase m-tb0 dez-tilte">Téléphone</h6>
                                                <p>0523-34-22-70/71/74/75/76</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- right part END -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <!-- Map part start -->
                            <h2>Our Location</h2>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" style="border:0; width:100%; height:400px;" allowfullscreen></iframe>
                            <!-- Map part END -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact area  END -->
            </div>
            <!-- Content END-->

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
    </body>

</html>
