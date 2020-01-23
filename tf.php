<?php

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cin']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['mel']) && isset($_POST['numTitreFoncier']) && isset($_POST['commune']) && isset($_POST['province']) && isset($_POST['numBE']) && isset($_POST['telBE']) && isset($_POST['faxBE']) && isset($_POST['textDemande']))
    {
        
       
        
        
        try {
            $conn = new PDO("mysql:host=localhost;dbname=ormvad", "root", "");
            
            $pdoStat = $conn->prepare('INSERT INTO subvention VALUES (:nom, :prenom, :cin, :adresse, :telephone, :mel, :numTitreFoncier, :commune, :province, :numBE, :telBE, :faxBE, :textDemande)');
            
            $pdoStat->bindValue(':nom',$_POST['nom']);
            $pdoStat->bindValue(':prenom',$_POST['prenom']);
            $pdoStat->bindValue(':cin',$_POST['cin']);
            $pdoStat->bindValue(':adresse',$_POST['adresse']);
            $pdoStat->bindValue(':telephone',$_POST['telephone']);
            $pdoStat->bindValue(':mel',$_POST['mel']);  
            $pdoStat->bindValue(':numTitreFoncier',$_POST['numTitreFoncier']);
            $pdoStat->bindValue(':commune',$_POST['commune']);
            $pdoStat->bindValue(':province',$_POST['province']);
            $pdoStat->bindValue(':numBE',$_POST['numBE']);
            $pdoStat->bindValue(':telBE',$_POST['telBE']);
            $pdoStat->bindValue(':faxBE',$_POST['faxBE']);
            $pdoStat->bindValue(':textDemande',$_POST['textDemande']);
            
            $InsertIsOk = $pdoStat->execute();
            
            if($InsertIsOk)
                {   echo "<script language='JavaScript'> alert('Ajout effectué') </Script>";    }
            else
                {   echo "<script language='JavaScript'> alert('Echec d'insertion ') </Script>";}
            
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }


        header("Location:index.php");
    }

 
        //$servername = "localhost";
        //$username = "root";
        //$password = "";
        //$dbname = "ormvad";
        
        /*
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
        
        
        // use exec() because no results are returned
            if($conn->exec($sql))
            {echo "<script language='JavaScript'> alert('Ajout effectué') </Script>";}
            else
            {echo "<script language='JavaScript'> alert('Echec d'insertion ') </Script>";}
        
        
        */
        
        //extract($_POST);
?>