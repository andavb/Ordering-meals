<?php

	if(isset($_POST["ime"]) && isset($_POST["priimek"]) && isset($_POST["id"]) && isset($_POST["tip"])){
		include 'povezava_baza.php';

		$ime = mysqli_escape_string($con, $_POST["ime"]);
		$priimek = mysqli_escape_string($con, $_POST["priimek"]);
		$id = mysqli_escape_string($con, $_POST["id"]);
		$tip = mysqli_escape_string($con, $_POST["tip"]);

		$JeZeVBazi = "SELECT Ime, Priimek, ID_uporabnika FROM uporabniki WHERE ID_uporabnika = $id";

		$rez = mysqli_query($con, $JeZeVBazi);

		if($rez->num_rows == 0){
			$poizvedba = "INSERT INTO uporabniki(ID_uporabnika, Ime, Priimek, tip) VALUES ($id, '".$ime."', '".$priimek."', $tip)";
			mysqli_query($con, $poizvedba);

			$myArr = array(1, $ime, $priimek, $id);
			echo json_encode($myArr);
		}
		else{
			$poizvedba = "UPDATE uporabniki SET Ime = '".$ime."', Priimek = '".$priimek."', tip = $tip WHERE ID_uporabnika = $id";
			mysqli_query($con, $poizvedba);

			while($row = $rez->fetch_assoc()) {
					$myArr = array(2, $ime, $priimek, $id, $row["Ime"], $row["Priimek"], $row["ID_uporabnika"]);
    	}
			echo json_encode($myArr);
		}

		//header("Location: ../../dodaj_uporabnika.php");
		die();
	}

?>
