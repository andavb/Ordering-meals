<?php

	if(isset($_GET['datum'])) {
		include 'povezava_baza.php';

		$datum = $_GET['datum'];

		$poizvedba = "SELECT glavnaJed1, glavnaJed2, glavnaJed3, solata1, solata2, solata3, sladica1, sladica2, sladica3, datum, DAYNAME(datum) as DanIme FROM jedilnik WHERE WEEK(datum, 7) = WEEK('".$datum."', 7) ORDER BY datum";

		$rezultat = mysqli_query($con, $poizvedba);

		$podatki = array();

		while($row = mysqli_fetch_assoc($rezultat)){
			$podatki[] = $row;
		}

	    echo json_encode($podatki);
	} else {
	    $test = '';
	    echo $test;
	}
?>