<?php
session_start();
if(empty($_SESSION['LOGIN'])){
    header("location:./Login/view/indexview.php"); 
}
session_destroy();
header("location:./Login/view/indexview.php"); 

?>
