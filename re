<?php
    session_start();
    if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass']))
    {
        extract($_POST);
        
        $conn = new PDO("mysql:host=localhost;dbname=ormvad", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "SELECT `pseudo`, `password` FROM `admin` WHERE `pseudo`=$login and `password`=$pass";
        $resultat = $conn->exec($sql);
        
        if($resultat->rowCount()>0)
        {
            $_SESSION['Auth'] = array(
                                    'login' => $login,
                                    'pass' => $pass
                                    );
        }
        else
        {
            echo 'mauvais identifiant';
        }

    }
?>