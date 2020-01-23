<?php

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['telephone']) && isset($_POST['msg']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ormvad";
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['mail'];
    $tel = $_POST['telephone'];
    $msg = $_POST['msg'];
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO contact (nom, prenom, tel, mail, msg)
        VALUES ('$nom', '$prenom', '$tel', '$email', '$msg')";
        // use exec() because no results are returned
        $conn->exec($sql);
        
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    

    $conn = null;
    
    header("Location:index.php");
}


?>