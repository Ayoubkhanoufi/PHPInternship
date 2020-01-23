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
        <title>ORMVAD - gestion des demandes de Soutien</title>
        
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
                            <h1 class="text-white">Demandes de Soutien</h1>
                        </div>
                    </div>
                </div>
                <!-- inner page banner END -->
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <div class="container">
                        <ul class="list-inline">
                            <li><a href="javascript:;">Administration</a></li>
                            <li>Géstion des demandes de soutien.</li>
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
                                    
                                    <h2 class="text-center">Notre guichet unique vous offres la meilleur orientation et le soutient convenable à vôtre exploitation</h2>
                                    <div class="dzFormMsg"></div>
                                    
                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        
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
                                                        <input name="email" type="email" class="form-control" required  placeholder="Vôtre Email..">
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
                                                        <input name="cin" type="text" required class="form-control" placeholder="Vôtre CIN..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="adresse" type="text" required class="form-control" placeholder="Vôtre adresse..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="telephone" type="text" required class="form-control" placeholder="Vôtre téléphone..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="commune" type="text" required class="form-control" placeholder="Vôtre commune..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="province" type="text" required class="form-control" placeholder="Vôtre Province..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="typeSoutient" type="text" required class="form-control" placeholder="Type de soutient désiré..">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <textarea name="demande" rows="10" class="form-control" required placeholder="Vôtre Demande..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php/*

                                        if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['cin']) && isset($_POST['typeSoutient']) && isset($_POST['commune']) && isset($_POST['province']) && isset($_POST['demande']))
                                        {


                                            //$servername = "localhost";
                                            //$username = "root";
                                            //$password = "";
                                            //$dbname = "ormvad";


                                            $nom = $_POST['nom'];
                                            $email = $_POST['email'];
                                            $prenom = $_POST['prenom'];
                                            $adresse = $_POST['adresse'];
                                            $telephone = $_POST['telephone'];
                                            $cin = $_POST['cin'];
                                            $typeSoutient = $_POST['typeSoutient'];
                                            $commune = $_POST['commune'];
                                            $province = $_POST['province'];
                                            $demande = $_POST['demande'];


                                            try {
                                                $conn = new PDO("mysql:host=localhost;dbname=ormvad", "root", "");
                                                // set the PDO error mode to exception
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                $sql = "INSERT INTO `soutien`(`nom`, `prenom`, `cin`, `adresse`, `tel`, `mail`, `commune`, `province`, `typeSoutien`, `textDemande`) VALUES ('$nom', '$prenom', '$cin', '$adresse', '$telephone', '$email', '$commune', '$province', '$typeSoutient', '$demande')";

                                                // use exec() because no results are returned
                                                if($conn->exec($sql))
                                                {echo "<script language='JavaScript'> alert('Ajout effectué') </Script>";}
                                                else
                                                {echo "<script language='JavaScript'> alert('Echec d'insertion ') </Script>";}
                                                }
                                            catch(PDOException $e)
                                                {
                                                echo $sql . "<br>" . $e->getMessage();
                                                }


                                        }


                                    */?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Nom</th>
                                  <th>Prénom</th>
                                  <th>CIN</th>
                                  <th>Adresse</th>
                                  <th>Téléphone</th>
                                  <th>Email</th>
                                  <th>Titre Foncier</th>
                                  <th>Commune</th>
                                  <th>Province</th>
                                  <th>N°Bureau d'études</th>
                                  <th>Tel Bureau d'études</th>
                                  <th>Fax Bureau d'études</th>
                                  <th>Demande</th>
                                </tr>
                              </thead>
                              <tbody>
                                    <?php 

                                        $conn = new PDO("mysql:host=localhost;dbname=ormvad", 'root', '');

                                        $pdoStat = $conn -> prepare('SELECT * FROM soutien');

                                        $pdoStat -> execute();

                                        $documents = $pdoStat -> fetchAll();

                                        foreach($documents as $document): 
                                    ?>
                                    <tr class="table-active">
                                        <td><?= $document['nom'] ?></td>
                                        <td><?= $document['prenom'] ?></td>
                                        <td><?= $document['cin'] ?></td>
                                        <td><?= $document['adresse'] ?></td>
                                        <td><?= $document['tel'] ?></td>
                                        <td><?= $document['mail'] ?></td>
                                        <td><?= $document['commune'] ?></td>
                                        <td><?= $document['province'] ?></td>
                                        <td><?= $document['typeSoutien'] ?></td>
                                        <td><?= $document['textDemande'] ?></td>
                                    </tr>
                                    <?php endforeach;  ?>
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
