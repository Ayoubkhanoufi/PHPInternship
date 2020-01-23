<?php

    if(isset($_POST['nom']) && isset($_POST['mel']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['cin']) && isset($_POST['numTitreFoncier']) && isset($_POST['commune']) && isset($_POST['province']) && isset($_POST['numBE']) && isset($_POST['telBE']) && isset($_POST['faxBE']) && isset($_POST['textDemande']))
    {
        
        
        //$servername = "localhost";
        //$username = "root";
        //$password = "";
        //$dbname = "ormvad";
        
        
        $nom = $_POST['nom'];
        $email = $_POST['mel'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $telephone = $_POST['telephone'];
        $cin = $_POST['cin'];
        $titreFoncier = $_POST['numTitreFoncier'];
        $commune = $_POST['commune'];
        $province = $_POST['province'];
        $bureauEtudes = $_POST['numBE'];
        $telBureauEtudes = $_POST['telBE'];
        $faxBureauEtudes = $_POST['faxBE'];
        $demande = $_POST['textDemande'];
        
        try {
            $conn = new PDO("mysql:host=localhost;dbname=ormvad", "root", "");
            
            $sql = "INSERT INTO subvention (nom, prenom, cin, adresse, tel, mail, numTitreFoncier, commune, province, numBE, telBE, faxBE, textDemande) VALUES ('$nom', '$prenom', '$cin', '$adresse', '$telephone', '$email', '$titreFoncier', '$commune', '$province', '$bureauEtudes', '$telBureauEtudes', '$faxBureauEtudes', '$demande')";
            
            // use exec() because no results are returned
            $conn->query($sql);

            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }



        header("Location:index.php");
    }


?>