<?php 

	if(isset($_POST['submit'])){

		include 'povezava_baza.php';

		session_start();

		if($_POST['submit'] == "Odjava"){
			$poizvedba = "DELETE FROM malice WHERE  ID_user = '".$_SESSION['ID']."' AND datum = '".$_POST['datum']."';";
		}
		else{
			$poizvedba = "INSERT INTO malice VALUES('".$_SESSION['ID']."','".$_POST['submit']."','".$_POST['datum']."')";
		}


		mysqli_query($con, $poizvedba);

		if($poizvedba == false){
			echo "<script>
				alert('NI bilo mogoče zapisati v bazo');
				header('Location: ../../uporabniki.php');
			</script>";
		}

		header('Location: ../../uporabniki.php');
	}

	die();

?>