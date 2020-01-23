<?php

/*session_start(); */

/*  if (isset($_SESSION["login"]) && empty($_GET["logout"])) {
  echo "<script>window.location='../../acceuil/controller/'</script>";
  }else {*/


  /* if (isset($_POST["username"]) && isset($_POST["password"])) { */

  include("../model/indexmodel.php");

       $user_info = array(
       "username"=> $_POST["username"],
       "password"=> $_POST["password"]
       );

       $user = new login_class($user_info);
       if ($user->check_login())  {
          echo "<script>window.location='../../statistiqueAdmin.php'</script>";
       }


       else {
            echo "<script>alert('Login ou mot de passe incorrect')</script>";
            echo "<script>window.location='../view/indexview.php'</script>";
       }
/*   } */

      /*
else {
  if (isset($_SESSION["login"]) && (!empty($_GET["logout"]))) {
      include("../model/index.php");
      $user = new login_class(null);
      $user->logout();
  }


  else{
     include("../view/index.php");
     }
   }

     }*/
?>