<?php
                $conn = mysqli_connect('localhost', 'root', '','stage');
                
		$type = $_POST['type'];
 
		$sql="INSERT INTO typestage (id, type) VALUES(NULL, '$type')";
		  if(mysqli_query($conn, $sql)){
		  	echo ;
		  }
		else{
		  echo "Insertion Failed";
		}
?>