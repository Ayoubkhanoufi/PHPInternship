<?php
 		$conn = mysqli_connect('localhost', 'root', '','stage');
                
		$type = $_POST['type'];
		
 
		$sql="INSERT INTO typestage (type) VALUES ('$type')";
		  mysqli_query($conn, $sql);
		
?>