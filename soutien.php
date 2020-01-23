<?php

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


        header("Location:index.php");
    }


?>