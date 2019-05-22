<?php
	
	include 'povezava_baza.php';

	$datum1 = $_GET['datum1'];
	$datum2 = $_GET['datum2'];

	$podatki[] = $datum1;
	$podatki[] = $datum2;

	$poizvedba = "SELECT uporabniki.ime, uporabniki.Priimek, COUNT(malice.ID_user) AS stevilo FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika = malice.ID_user where malice.datum BETWEEN '".$datum1."' AND '".$datum2."' and uporabniki.tip = 1 GROUP BY uporabniki.ID_uporabnika ORDER BY COUNT(malice.ID_user) DESC";

	$rezultat = mysqli_query($con, $poizvedba);

	while($row = mysqli_fetch_assoc($rezultat)){
		$podatki[] = $row;
	}

	echo json_encode($podatki);

?>