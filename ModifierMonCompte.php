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
        <title>ORMVAD - Mon Compte</title>
        
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
                    <div class="col-lg-8 col-md-8"><i class="fa fa-users"></i> View Student Details</div>
                </div>
            </div>
            <div class="panel-body">
                						
                
                                                          
                    <div class="row">
                        <div class="col-lg-12 col-md-12">

                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <center>
                                        <span class="text-left">
                                        <!--<img src="https://lh5.googleusercontent.com/proxy/EkYugv9KzLUfAIpv-P4g6b0_mKxhcsfTvNmVueDn6XDHQp_SA0_hG2YFVAwB0Lbj_S-LrT-OtYsvxXMCrkZZMCmBfwelTQaAZW6GZwMQ8bRLwEvZonc0k0NxUpkhLBDuApx25K735rZfyHCIqA1RVpSdU84HF7U-j3xAwt3XLevAJtr5pwaVnRUC=w120-h120" class="img-responsive img-thumbnail">
                                            <!-- Modal -->
                                            <!--<div class="modal fade" id="PhotoOption" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog" style="width:30%;height:30%;">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title text-success" id="myModalLabel"><i class="fa fa-gear"></i> <span class="text-right">Viddhyut Mall</span></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                        <center><img src="upload/profile_pic/701b4263f7d38604699b7c1f89a3e6a6.jpg" class="img-responsive img-thumbnail"></center>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="upload/upload-view.php?id=68" class="btn btn-success"><i class="fa fa-photo"></i> Upload</a>
                                                            <a href="upload/upload-view.php?id=68&amp;name=Viddhyut Mall&amp;src=view" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                                        </div>
                                                    </div>-->
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->                    
                                    </span></center>

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
                                        
                                </div>
                                <div class="col-lg-12 col-md-9" >
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="" class="text-success"><i class="fa fa-indent"></i> Mes informations</a></li>
                                        
                                    </ul>

                                    <div class="tab-content">
                                        <div id="Summery" class="tab-pane fade in active">
                                        
                                        <form method="POST" action="controller/modifiermoncompte.php">
                                            <input value='<?php echo $_GET['id']; ?>' name="id" type="hidden">
                                            <?php
                                             include_once './racine.php';
                                             include_once RACINE.'/Services/StagiaireServices.php';
                                            $st = new StagiaireServices();

                                            $id=$_GET['id'];
                                            $sta=$st->findById($id);
                                            ?>
                                            <div class="table-responsive panel">
                                                <table class="table">
                                                    <tbody>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-adjust"></i> Civilite</td>
                                                                <td>
                                                                    <select class="form-control" style="font-style: oblique;" name="civilite">
                                                                        <option value="Mr" >Monsieur</option>
                                                                        <option value="Mme">Madame</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-user"></i> Nom</td>
                                                                <td><input  class="form-control" style="font-style: oblique;" name="nom" type="text" value="<?php echo $sta->getNom();?>"</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-user"></i> Prenom</td>
                                                                <td><input class="form-control" style="font-style: oblique;" name="prenom" type="text" value="<?php echo $sta->getPrenom();?>"</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-home"></i> Adresse</td>
                                                                <td><input class="form-control" style="font-style: oblique;" name="adresse" type="text" value="<?php echo $sta->getAdresse();?>"</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-mobile"></i> Téléphone</td>
                                                                <td><input class="form-control" style="font-style: oblique;" name="telephone" type="text" value="<?php echo $sta->gettelephone();?>"</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-envelope-o"></i> Email</td>
                                                                <td><input class="form-control" style="font-style: oblique;" name="email" type="text" value="<?php echo $sta->getEmail();?>"</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-calendar"></i> Date de naissance</td>
                                                                <td><input class="form-control" style="font-style: oblique;" name="datedenaissance" type="text" value="<?php echo $sta->getDatenaissance();?>"</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-graduation-cap"></i> Niveau d'étude</td>
                                                                <td><select class="form-control" style="font-style: oblique;" name="niveau" id="niveau" class="selection-1">
                                                                    <option hidden >Niveau d'etude</option>
                                                                        <?php
                                                                         include_once RACINE.'/services/NiveauEtude.php';
                                                                         $ne = new NiveauEtudeServices();
                                                                         foreach ($ne->findAll() as $n) {
                                                                        ?>
                                                                    <option value="<?php echo $n->getId(); ?>"><?php echo $n->getNiveauEtude(); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-cog"></i> Specialite</td>
                                                                <td><input class="form-control" style="font-style: oblique;" name="specialite" type="text" value="<?php echo $sta->getSpecialite();?>"</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-university"></i> Etablissement</td>
                                                                <td><input class="form-control" style="font-style: oblique;" name="etablissement" type="text" value="<?php echo $sta->getEtablissement();?>"</td>
                                                            </tr>
                                                            <!--<tr>
                                                                <td class="text-info"><i class="fa fa-university"></i> MDP</td>
                                                                <td><input class="form-control" style="font-style: oblique;" name="mdp" type="text" value="<?php echo $sta->getmdp();?>"</td>
                                                            </tr>-->
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-book"></i> CV</td>
                                                                <td><input style="font-style: oblique; border-radius: 10px;" name="Cv" type="file" value="<?php echo $sta->getCv();?>"</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><i class="fa fa-bookmark"></i> Demeande de stage</td>
                                                                <td><input style="font-style: oblique; border-radius: 10px;" name="demandestage" type="file" value="<?php echo $sta->getDemandestage();?>"</td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                                
                                                <div class="col-lg-3" style="padding-top: 30px;">
                                                    <button name="submit" type="submit" value="Submit" class="btn btn-success btn-block" style="border-radius: 7px;" > <span ><i class="fa fa-check"></i> Enregistrer</span></button>
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 30px;">
                                                    <a href="MonCompte.php" class="btn btn-danger btn-block" style="border-radius: 7px;" onclick="return confirm('Voulez-vous quitter ? ');"><i class="fa fa-close"></i> Annuler</a>
                                                </div>
                                            </div>
                                        </form>
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