<?php
	include 'povezava_baza.php';

	$poizvedbaIme = "SELECT glavnaJed1, glavnaJed2, glavnaJed3, solata1, solata2, solata3, sladica1, sladica2, sladica3, DATE_FORMAT(DATUM,'%d. %m') AS DATUM1, DAYNAME(datum) AS DanIme FROM jedilnik where datum between NOW() - INTERVAL 1 DAY and NOW() + INTERVAL 5 DAY";

	$rezultat = mysqli_query($con, $poizvedbaIme);

	if(mysqli_num_rows($rezultat) > 0){
		while ($row = $rezultat->fetch_assoc()) {

			if(($row["DanIme"]!= "Saturday") && ($row["DanIme"] != "Sunday")){
				echo '<tr>';
					echo '<td class="agenda-date">';
					if($row["DanIme"] == "Monday"){
						echo '<div class="dayofweek">Ponedeljek</div>';
					}
					else if($row["DanIme"] == "Tuesday"){
						echo '<div class="dayofweek">Torek</div>';
					}
					else if($row["DanIme"] == "Wednesday"){
						echo '<div class="dayofweek">Sreda</div>';
					}
					else if($row["DanIme"] == "Thursday"){
						echo '<div class="dayofweek">Četrtek</div>';
					}
					else if($row["DanIme"] == "Friday"){
						echo '<div class="dayofweek">Petek</div>';
					}

					echo '<div class="shortdate text-muted">'.$row["DATUM1"].'</div>';

					echo '</td>';

					if($row["glavnaJed1"] != NULL){
						echo '<td class="agenda-time">';
						echo $row["glavnaJed1"];
						if($row["solata1"] != NULL){
							echo "<br>";
							echo $row["solata1"];
						}
						if($row["sladica1"] != NULL){
							echo "<br>";
							echo $row["sladica1"];
						}
						echo '</td>';
					}
					if($row["glavnaJed2"] != NULL){
						echo '<td class="agenda-time">';
						echo $row["glavnaJed2"];
						if($row["solata2"] != NULL){
							echo "<br>";
							echo $row["solata2"];
						}
						if($row["sladica2"] != NULL){
							echo "<br>";
							echo $row["sladica2"];
						}
						echo '</td>';
					}
					if($row["glavnaJed3"] != NULL){
						echo '<td class="agenda-time">';
						echo $row["glavnaJed3"];
						if($row["solata3"] != NULL){
							echo "<br>";
							echo $row["solata3"];
						}
						if($row["sladica3"] != NULL){
							echo "<br>";
							echo $row["sladica3"];
						}
						echo '</td>';
					}
				echo '</tr>';
			}
	    }	
	}
?>