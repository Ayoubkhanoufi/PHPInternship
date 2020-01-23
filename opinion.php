<?php

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['mail']) && isset($_POST['msg']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ormvad";
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $msg = $_POST['msg'];
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $req = $conn->prepare('INSERT INTO `opinion`(`nom`, `prenom`, `tel`, `mail`, `msg`) VALUES (:nom,:prenom,:tel,:mail,:msg)');
        
        $req->execute(array(
                            'nom' => $nom,
                            'prenom' => $prenom,
                            'tel' => $tel,
                            'mail' => $mail,
                            'msg' => $msg
                            ));
        
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    
    
    header("Location:index.php");
}


?>