<?php

if(isset($_POST['submit'])){

	if(!empty($_POST['uporabnik']) && !empty($_POST['geslo'])){

		include 'povezava_baza.php';

		mysqli_query($con, "SET NAMES UTF8");

		$uporabnik = mysqli_escape_string($con, $_POST['uporabnik']);
		$geslo = mysqli_escape_string($con, $_POST['geslo']);


		$poizvedba = "SELECT uporabnisko_ime, geslo, imePriimek FROM upravitelji WHERE uporabnisko_ime = '".$uporabnik."'";

		$rez = mysqli_query($con, $poizvedba);

		if($rez->num_rows > 0){
			$data = $rez->fetch_array();
			if(password_verify($geslo, $data['geslo'])){
				setcookie('uporabnisko_ime', $data['uporabnisko_ime'], time()+60*60*7);
				session_start();
	            $_SESSION['uporabnisko_ime'] = $data['uporabnisko_ime'];
	            header("Location: ../../index.php");
			}
			else{
				header("Location: ../../prijavno_okno.php?1");
				die();
			}
		}
		else{
			header("Location: ../../prijavno_okno.php?1");
			die();
		}
	}
	else{
		header("Location: ../../prijavno_okno.php?1");
		die();
	}
}

?>