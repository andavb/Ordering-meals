<?php
	
	include 'povezava_baza.php';

	$datum1 = $_GET['datum1'];
	$datum2 = $_GET['datum2'];

	$poizvedba = "SELECT COUNT(ID_user) AS ST FROM malice INNER JOIN uporabniki ON malice.ID_user = uporabniki.ID_uporabnika WHERE datum BETWEEN '".$datum1."' AND '".$datum2."' AND uporabniki.tip = 1";

	$rezultat = mysqli_query($con, $poizvedba);

	while($row = mysqli_fetch_assoc($rezultat)){
		$podatki[] = $row;
	}

	$podatki[] = $datum1;
	$podatki[] = $datum2;

	echo json_encode($podatki);

?>