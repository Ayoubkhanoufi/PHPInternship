<?php
    session_start();

    
    $conn = new PDO("mysql:host=localhost;dbname=ormvad", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $message='';
    
    if (empty($_POST['login']) || empty($_POST['pass']) ) //Oublie d'un champ
    {
        header("Location:login.php");
    }
    else //On check le mot de passe
    {
        $query=$conn->prepare('SELECT * FROM admin WHERE pseudo = :pseudo');
        
        $query->bindValue(':pseudo',$_POST['login'], PDO::PARAM_STR);
        
        $query->execute();
        
        $data=$query->fetch();
	
        if ($data['password'] == $_POST['pass']) // Acces OK !
        {
            $_SESSION['pseudo'] = $data['pseudo'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['id'] = $data['idAdmin'];
            header("Location:adminOpinion.php"); 
        }
	else // Acces pas OK !
	{
	    $message = '<p>Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="login.php">ici</a> 
	    pour revenir à la page précédente
	    <br /><br />Cliquez <a href="index.php">ici</a> 
	    pour revenir à la page d accueil</p>';
	}
    $query->CloseCursor();
    }
    echo $message;
    
?>
