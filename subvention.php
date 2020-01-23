<?php

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cin']) && isset($_POST['adresse']) && isset($_POST['tel']) && isset($_POST['mail']) && isset($_POST['numTitreFoncier']) && isset($_POST['commune']) && isset($_POST['province']) && isset($_POST['numBE']) && isset($_POST['telBE']) && isset($_POST['faxBE']) && isset($_POST['textDemande']))
    {
        
        
        //$servername = "localhost";
        //$username = "root";
        //$password = "";
        //$dbname = "ormvad";
        
        
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $cin = $_POST['cin'];
        $adresse = $_POST['adresse'];
        $tel = $_POST['tel'];
        $mail = $_POST['mail'];
        $numTitreFoncier = $_POST['numTitreFoncier'];
        $commune = $_POST['commune'];
        $province = $_POST['province'];
        $numBE = $_POST['numBE'];
        $telBE = $_POST['telBE'];
        $faxBE = $_POST['faxBE'];
        $textDemande = $_POST['textDemande'];
        
        
        $conn = new PDO("mysql:host=localhost;dbname=ormvad", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        
        $req = $conn->prepare('INSERT INTO `subvention`(`nom`, `prenom`, `cin`, `adresse`, `tel`, `mail`, `numTitreFoncier`, `commune`, `province`, `numBE`, `telBE`, `faxBE`, `textDemande`) VALUES (:nom,:prenom,:cin,:adresse,:tel,:mail,:numTitreFoncier,:commune,:province,:numBE,:telBE,:faxBE,:textDemande)');
        
        $req->execute(array(
                            'nom' => $nom,
                            'prenom' => $prenom,
                            'cin' => $cin,
                            'adresse' => $adresse,
                            'tel' => $tel,
                            'mail' => $mail,
                            'numTitreFoncier' => $numTitreFoncier,
                            'commune' => $commune,
                            'province' => $province,
                            'numBE' => $numBE,
                            'telBE' => $telBE,
                            'faxBE' => $faxBE,
                            'textDemande' => $textDemande
                            ));

        

    }

?>