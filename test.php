<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['numi'])) {
    $_SESSION['numi1'] = $_SESSION['numi'];
}
if (isset($_SESSION['gr'])) {
    $_SESSION['gr1'] = $_SESSION['gr'];
    $gr = $_SESSION['gr'];
}
if (isset($_SESSION['gr'])) {
    $gr = $_SESSION['gr1'];
}

include_once './racine.php';
include_once RACINE . '/service/EtudiantService.php';
include_once RACINE . '/service/absenceService.php';
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title> Etudiant</title>

        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Morris Charts CSS -->
        <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            .form-group{
                width: 50%;
            }
            #prof{
                width:40%;
            }
            #divF{
                margin-left: 20%;
            }

            #dchercher{
                padding-top: 1%;
                padding-left: 15%;
                padding-bottom: 3%;
            }
            #bchercher{
                margin-bottom: 1%;
            }

            table{

                table-layout: auto;
            }
            a { cursor: pointer; }
        </style>
        <script src="../vendor/jquery/jquery.min.js"></script>

        <script>
            $(document).ready(function () {

                $('#idf').on('change', function () {
                    var idf = $(this).val();
                    if (idf) {
                        $.get(
                                "ajax3.php",
                                {idf: idf},
                                function (data) {
                                    $('#numero').html(data);
                                }
                        );
                    } else
                    {
                        $('#numero').html('<option>Veuillez choisir un groupe</option>');
                    }
                });
            });

            $(document).ready(function () {

                $('#numero').on('change', function () {
                    var numero = $(this).val();
                    if (numero) {
                        $.get(
                                "ajax6.php",
                                {numero: numero},
                                function (data) {
                                    $('#numi').html(data);
                                }
                        );
                    } else
                    {
                        $('#numi').html('<option>Veuillez choisir un etudiant</option>');
                    }
                });
            });

        </script>
    </head>

    <body>


        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Gestion absences</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">

                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil </a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Parametres</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Se deconnecter</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="absence.php"><i class="fa fa-dashboard fa-fw"></i> Acceuil</a>
                            </li>

                            <li>
                                <a href="affecterabsence.php"><i class="fa fa-edit fa-fw"></i> Affecter Absence</a>
                            </li>
                            <li>
                                <a href="absence.php"><i class="fa fa-table fa-fw"></i> Afficher Absences</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">


                    <h1 class="page-header">Absences</h1>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label>Filiere :</label>
                            <select name="idf" id="idf"  class="form-control">
                                <option hidden >Veuillez choisir une filiere</option>
<?php
include_once RACINE . '/service/FiliereService.php';
$es = new FiliereService();
foreach ($es->findAll() as $e) {
    ?>
                                    <option value="<?php echo $e->getId(); ?>"><?php echo $e->getNom(); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Groupe :</label>
                            <select name="numero" id="numero"  class="form-control">
                                <option hidden>Veuillez choisir un groupe</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Etudiant :</label>
                            <select name="numi" id="numi"  class="form-control">
                                <option hidden>Veuillez choisir un etudiant</option>
                            </select>
                        </div>
                        <!-- /.panel -->
                        <!-- /.row -->
                        <div id="dchercher">
                            <table width='30%'>
                                <tr>
                                    <td>
                                        <button type="submit" name="bchercher" id="bchercher" class="btn btn-info">Chercher</button></td><td>
                                    </form><form action="pdf.php" method="POST"> 
                                    <input type='text' hidden name='nm' value='<?php echo $_SESSION['numi']; ?>'/>
                                    <button type="submit" class="btn btn-warning">Imprimer</button>

                                </form></td></tr>
                    </table>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Absences
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table width="100%" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Matiere</th>
                                                <th>Justifiée</th>
                                                <th>Non Justifiée</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
if (isset($_POST['numi']) || isset($_SESSION['numi1'])) {
    if (isset($_POST['numi']))
        $_SESSION['numi'] = $_POST['numi'];
    $numi = $_SESSION['numi'];

    include_once RACINE . '/service/absenceService.php';
    $ab = new absenceService();
    include_once RACINE . '/service/matiereService.php';
    $ma = new matiereService();
    include_once RACINE . '/service/etudiantService.php';
    $et = new etudiantService();

    foreach ($ma->findByNumeroGr($gr) as $e) {
        ?>
                                                    <tr class="odd gradeX"> 
                                                        <td><?php echo $e->getNom(); ?> </td>

                                                        <td><?php echo $ab->findAbsenceJustifiee($numi, $e->getId()); ?></td>

                                                        <td><?php echo $ab->findAbsenceNonJustifiee($numi, $e->getId()); ?></td>
                                                        <td style="text-align: center;">



                                                            <!-- Button trigger modal -->

                                                            <input type='text' hidden id='idmat'  value='<?php echo $e->getId(); ?> '/><a onclick="return chk()"  href="" class="btn btn-success btnSelect" data-toggle="modal"  data-target="#myModal">Voir details
                                                            </a>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                            <h4 class="modal-title" id="myModalLabel">Details</h4>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <div id="conteneur">

                                                                                <div class="table-responsive">
                                                                                    <table width="100%" class="table table-striped table-bordered table-hover">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Matiere</th>
                                                                                                <th>Date</th>
                                                                                                <th>Heure </th>
                                                                                                <th>Duree absence</th>

                                                                                                <th>Justifiée</th>
                                                                                                <th>Annee Scolaire</th>
                                                                                                <th>Cliquez ici pour justifier l'absence</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                                <?php
                                                                                                if (isset($_POST['numi']) || isset($_SESSION['numi1'])) {
                                                                                                    if (isset($_POST['numi']))
                                                                                                        $_SESSION['numi'] = $_POST['numi'];
                                                                                                    $numi = $_SESSION['numi'];

                                                                                                    include_once RACINE . '/service/absenceService.php';
                                                                                                    $ab = new absenceService();
                                                                                                    include_once RACINE . '/service/matiereService.php';
                                                                                                    $ma = new matiereService();
                                                                                                    include_once RACINE . '/service/etudiantService.php';
                                                                                                    $et = new etudiantService();

                                                                                                    foreach ($ab->findByNumeroInscriptionMat($numi, $e->getId()) as $e) {
                                                                                                        ?>
                                                                                                    <tr class="odd gradeX"> 
                                                                                                        <td><?php echo $ma->findById($e->getIdm())->getNom(); ?></td>
                                                                                                        <td><?php echo $e->getDate(); ?></td>
                                                                                                        <td><?php echo $e->getHeureDebut(); ?></td>
                                                                                                        <td><?php echo $e->getDureeAbsence() . " heures"; ?></td>

                                                                                                        <td><?php echo $e->getJustifiee(); ?></td>

                                                                                                        <td><?php echo $e->getAnneeScolaire(); ?></td>

                                                                                                        <td> 

                                                                                                        <?php
                                                                                                        $var = $e->getJustifiee1();
                                                                                                        if ($e->getJustifiee1() == 0) { //here ur condition to check for male
                                                                                                            $justifieediv = "hidden";
                                                                                                        } else {
                                                                                                            $justifieediv = " ";
                                                                                                        }
                                                                                                        if ($e->getJustifiee1() == 1) { ////here ur condition to check for female
                                                                                                            $nonjustifieediv = "hidden";
                                                                                                        } else {
                                                                                                            $nonjustifieediv = " ";
                                                                                                        }
                                                                                                        ?>

                                                                                                            <div style="text-align:center"  id="justifiee"  <?php echo $justifieediv; ?>>
                                                                                                                <a  onclick="deleteme('<?php echo $e->getIdm() ?>', '<?php echo $e->getNumeroInscription() ?>', '<?php echo $e->getJustifiee1() ?>', '<?php echo $e->getDate() ?>', '<?php echo $e->getHeureDebut(); ?>');" style="width:80%" class="btn btn-success">Justifiée</a>
                                                                                                            </div>
                                                                                                            <div style="text-align:center"  id="nonjustifiee"  <?php echo $nonjustifieediv; ?>>
                                                                                                                <a  onclick="deleteme('<?php echo $e->getIdm() ?>', '<?php echo $e->getNumeroInscription() ?>', '<?php echo $e->getJustifiee1() ?>', '<?php echo $e->getDate() ?>', '<?php echo $e->getHeureDebut(); ?>');" style="width:80%" class="btn btn-danger">Non justifiée</a>
                                                                                                            </div>


                                                                                                        </td>

                                                                                                    </tr>
                                                                                                        <?php }
                                                                                                    } ?>
                                                                                        </tbody>
                                                                                    </table>

                                                                                    <div hidden>

                                                                                        <div class="form-group">
                                                                                                <?php
                                                                                                if (isset($_POST['idm']))
                                                                                                    $idm = $_POST['idm'];
                                                                                                ?>
                                                                                            <input name="col1" id="col1" value="<?php
                                                                            $ab = new absenceService();
                                                                            echo $ab->findNbPresence($numi, $idm);
                                                                            ?>" class="form-control" >
                                                                                        </div>
                                                                                        <div class="form-group">

                                                                                            <input name="col2" id="col2" value="<?php $ab = new absenceService();
                                                                                    echo $ab->findnbAbsenceJustifiee($numi, $idm);
                                                                                    ?>" class="form-control">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input name="col3" id="col3" value=" <?php $ab = new absenceService();
                                                                                    echo $ab->findnbAbsenceNonJustifiee($numi, $idm);
        ?>" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <!-- /.modal-content -->
                                                                        </div>
                                                                        <!-- /.modal-dialog -->
                                                                    </div>
                                                                    <!-- /.modal -->
                                                                </div>

                                                        </td>

                                                    </tr>
    <?php }
} ?>
                                        </tbody>
                                    </table>

                                    <div hidden>

                                        <div class="form-group">
<?php
if (isset($_POST['idm']))
    $idm = $_POST['idm'];
?>
                                            <input name="col1" id="col1" value="<?php
                                            $ab = new absenceService();
                                            echo $ab->findNbPresence($numi, $idm);
?>" class="form-control" >
                                        </div>
                                        <div class="form-group">

                                            <input name="col2" id="col2" value="<?php $ab = new absenceService();
                                            echo $ab->findnbAbsenceJustifiee($numi, $idm);
?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input name="col3" id="col3" value=" <?php $ab = new absenceService();
                                            echo $ab->findnbAbsenceNonJustifiee($numi, $idm);
?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <form method="POST" action="">
                                            <table width="100%">
                                                <tr>
                                                    <td style="padding-right: 5%">
                                                        <label>Voir le graphe d'absence de la matiere :</label>
                                                        <select name="idm" id="idm"  class="form-control">
                                                            <option hidden >Veuillez choisir une matiere</option>
<?php
if (isset($_POST['numero'])) {
    $_SESSION['gr'] = $_POST['numero'];
}

include_once RACINE . '/service/MatiereService.php';
$mat = new MatiereService();
foreach ($mat->findByNumeroGr($gr) as $e) {
    ?>
                                                                <option value="<?php echo $e->getId(); ?>"><?php echo $e->getNom(); ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                    <td style="padding-top:3%;">

                                                        <button  type="submit" class="btn btn-default btn-circle btn-lg"><i class="fa fa-check"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>      
                                    </div>
                                    <div  name='dgraphe' <?php if (!isset($idm)) echo 'hidden' ?> id='dgraphe'>

                                        <div class="col-lg-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Absences en <?php if (isset($idm)) echo $ma->findById($idm)->getNom() ?>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="flot-chart">
                                                        <div class="flot-chart-content" id="flot-pie-chart"></div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- /.panel -->
                                        </div>
                                    </div>

                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>

                </div>
                <!-- /.container-fluid -->

                <!-- /#page-wrapper -->
        </div>
    </div>
</div>


<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<script lang="javascript">
                                                                                                    function deleteme(idm, numeroInscription, justifiee, date, heuredebut)
                                                                                                    {
                                                                                                        if (confirm("Cliquez OK pour confirmer!")) {
                                                                                                            window.location.href = 'controller/updateabsence.php?idm=' + idm + '&numeroInscription=' + numeroInscription + '&justifiee=' + justifiee + '&date=' + date + '&heuredebut=' + heuredebut + '';
                                                                                                        }
                                                                                                    }

</script>


<!-- Flot Charts JavaScript -->
<script src="../vendor/flot/excanvas.min.js"></script>
<script src="../vendor/flot/jquery.flot.js"></script>
<script src="../vendor/flot/jquery.flot.pie.js"></script>
<script src="../vendor/flot/jquery.flot.resize.js"></script>
<script src="../vendor/flot/jquery.flot.time.js"></script>
<script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>

<script>

</script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
<script>
    var col1;
    var col2;
    var col3;
    $(document).ready(function () {

// code to read selected table row cell data (values).
        $("#dataTables-example").on('click', '.btnSelect', function () {
// get the current row
            var currentRow = $(this).closest("tr");

            var col1 = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
            var col2 = currentRow.find("td:eq(1)").text(); // get current row 2nd TD
            var col3 = currentRow.find("td:eq(2)").text();
            $('#col1').val(col1);
            $('#col2').val(col2);
            $('#col3').val(col3);

        });
    });

    $(function () {

        var data = [{
                label: "Présence",
                data: $("#col1").val().toString()
            }, {
                label: "Absences Justifiées",
                data: $("#col2").val().toString()
            }, {
                label: "Absences non Justifiées",
                data: $("#col3").val().toString()
            }];

        var plotObj = $.plot($("#flot-pie-chart"), data, {
            series: {
                pie: {
                    show: true
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                shifts: {
                    x: 20,
                    y: 0
                },
                defaultTheme: false
            }
        });

    });

</script> 
</body>

</html>
