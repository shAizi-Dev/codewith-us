<?php
	$con =mysql_connect("localhost", "root","", "user");
	if ($con) {
		echo "connected";
	}else{
		echo "not connected";
	}


?>