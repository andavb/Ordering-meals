<?php

	if(isset($_POST["ime_priimek"]) && isset($_POST["upr_ime"]) && isset($_POST["geslo"])){
		include 'povezava_baza.php';

		$ime = mysqli_escape_string($con, $_POST["ime_priimek"]);
		$uprIme = mysqli_escape_string($con, $_POST["upr_ime"]);
		$geslo = mysqli_escape_string($con, $_POST["geslo"]);

		$hash = password_hash($geslo, PASSWORD_DEFAULT);


		$poizvedba = "INSERT INTO upravitelji(uporabnisko_ime, geslo, imePriimek) VALUES ('".$uprIme."', '".$hash."', '".$ime."')";

		$test = mysqli_query($con, $poizvedba);

		header("Location: ../../dodaj_upravitelja.php");

		die();
	}

?>