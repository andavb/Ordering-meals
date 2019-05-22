<?php

	$con=mysqli_connect("localhost","root","","asDomzale");
	 //Dodamo podporo za slovenske znake
	mysqli_query($con, "SET NAMES UTF8");
	//Preverimo če povezava deluje
	if(mysqli_connect_errno())
	{
	    echo "Ne moremo se povezati z MySQL: " . mysqli_connect_error();
	    mysqli_close($con);
	    exit;
	}
?>