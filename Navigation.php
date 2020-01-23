<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<!--<div class="profile-userpic">
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>-->
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
                                        <div style="padding-bottom: 20px;"  class="profile-">
                                            <img src="images/Etud.jpg" class="img-responsive img-thumbnail" style="border-radius: 50px;">
                                            <!--<img src="" class="img-responsive" alt="">-->
                                        </div>
					<div class="profile-usertitle-name">
						<?php $Nom=$_SESSION['NOMs'];
                                                      $Prenom=$_SESSION['PRENOMs'];
                                                     echo $Nom.' '.$Prenom;    
                                                ?>
					</div>
					<div class="profile-usertitle-job">
                                                
						<?php 
                                                    function Age($date)
                                                    {
                                                      return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);
                                                    }
                                                    $age = Age($_SESSION['DATEs']); 
                                                    $etablissement = $_SESSION['ETABLISSEMENTs'];
                                                    echo "(".$age." ans, étudiant à $etablissement )";
                                                ?>
					</div>
				</div>
				
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="statistiqueStagiaire.php">
							<i class="glyphicon glyphicon-dashboard"></i>
							Tableau de bord </a>
						</li>
						<li>
							<a href="MonCompte.php">
							<i class="glyphicon glyphicon-user"></i>
							Mon Compte </a>
						</li>
						<li>
							<a href="Mademande_Stage.php">
							<i class="glyphicon glyphicon-bullhorn"></i>
							Mes demandes </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
                                
				<!-- END MENU -->
			</div>