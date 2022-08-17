<?php
	
	include("config.php")

	
  	$query = "SELECT * FROM table1"
  	$data = mysqli_query($connect, $query);

  	while($row = mysqli_fetch_assoc($data) ){

  		echo $row;
  	}


?>