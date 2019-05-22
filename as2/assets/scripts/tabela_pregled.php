<?php
	include 'povezava_baza.php';

	$currentTime = time();
 	$weekDay = date('w', strtotime("now"));

	if ((((int) date('H', $currentTime)) < 11) && ($weekDay != 0 && $weekDay != 6)) {

		$poizvedbaDatum = "SELECT datum AS DATUM, DATE_FORMAT(datum,'%d. %m') AS DATUM1, DAYNAME(datum) AS DanIme FROM jedilnik where datum = CURDATE()";
		$rez = mysqli_query($con, $poizvedbaDatum);

		$row = $rez->fetch_assoc();

//malice za AS danes
		$meni1AS = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed1 AS opis1, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed1 WHERE malice.datum = CURDATE() AND jedilnik.datum = CURDATE() AND uporabniki.tip = 1 GROUP BY uporabniki.ID_uporabnika";

		$meni2AS = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed2 AS opis2, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed2 WHERE malice.datum = CURDATE() AND jedilnik.datum = CURDATE() AND uporabniki.tip = 1 GROUP BY uporabniki.ID_uporabnika";

		$meni3AS = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed3 AS opis3, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed3 WHERE malice.datum = CURDATE() AND jedilnik.datum = CURDATE() AND uporabniki.tip = 1 GROUP BY uporabniki.ID_uporabnika";

		$skupajAS = "SELECT COUNT(meni) AS st FROM malice INNER JOIN uporabniki on malice.ID_user = uporabniki.ID_uporabnika where malice.datum = CURDATE() AND uporabniki.tip = 1";

//malice za ALU danes
		$meni1ALU = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed1 AS opis1, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed1 WHERE malice.datum = CURDATE() AND jedilnik.datum = CURDATE() AND uporabniki.tip = 2 GROUP BY uporabniki.ID_uporabnika";

		$meni2ALU = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed2 AS opis2, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed2 WHERE malice.datum = CURDATE() AND jedilnik.datum = CURDATE() AND uporabniki.tip = 2 GROUP BY uporabniki.ID_uporabnika";

		$meni3ALU = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed3 AS opis3, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed3 WHERE malice.datum = CURDATE() AND jedilnik.datum = CURDATE() AND uporabniki.tip = 2 GROUP BY uporabniki.ID_uporabnika";

		$stMalic1 = "SELECT COUNT(jedilnik.glavnaJed1) AS meni1 FROM jedilnik INNER JOIN malice ON jedilnik.glavnaJed1 = malice.meni WHERE jedilnik.datum = CURDATE()";

		$stMalic2 = "SELECT COUNT(jedilnik.glavnaJed2) AS meni2 FROM jedilnik INNER JOIN malice ON jedilnik.glavnaJed2 = malice.meni WHERE jedilnik.datum = CURDATE()";

		$stMalic3 = "SELECT COUNT(jedilnik.glavnaJed3) AS meni3 FROM jedilnik INNER JOIN malice ON jedilnik.glavnaJed3 = malice.meni WHERE jedilnik.datum = CURDATE()";

		$skupajALU = "SELECT COUNT(meni) AS st FROM malice INNER JOIN uporabniki on malice.ID_user = uporabniki.ID_uporabnika where malice.datum = CURDATE() AND uporabniki.tip = 2";

//skupajMeniji
		$skupajMeni1 = "SELECT COUNT(meni) AS stevilo FROM malice INNER JOIN jedilnik on malice.meni = jedilnik.glavnaJed1 WHERE malice.datum = CURDATE() AND jedilnik.datum = CURDATE()";

		$skupajMeni2 = "SELECT COUNT(meni) AS stevilo FROM malice INNER JOIN jedilnik on malice.meni = jedilnik.glavnaJed2 WHERE malice.datum = CURDATE() AND jedilnik.datum = CURDATE()";

		$skupajMeni3 = "SELECT COUNT(meni) AS stevilo FROM malice INNER JOIN jedilnik on malice.meni = jedilnik.glavnaJed3 WHERE malice.datum = CURDATE() AND jedilnik.datum = CURDATE()";

		$skupaj = "SELECT COUNT(meni) AS st FROM malice INNER JOIN uporabniki on malice.ID_user = uporabniki.ID_uporabnika where malice.datum = CURDATE()";


	}
	else{
		$poizvedbaDatum = "SELECT datum AS DATUM, DATE_FORMAT(datum,'%d. %m') AS DATUM1, DAYNAME(datum) AS DanIme FROM jedilnik where datum > CURDATE() AND (DAYNAME(datum) != 'Saturday' AND DAYNAME(datum) != 'Sunday') ORDER BY datum LIMIT 1";

		$rez = mysqli_query($con, $poizvedbaDatum);

		$row = $rez->fetch_assoc();


//malice za AS jutri
		$meni1AS = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed1 AS opis1, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed1 WHERE malice.datum = '".$row['DATUM']."' AND jedilnik.datum = '".$row['DATUM']."' AND uporabniki.tip = 1 GROUP BY uporabniki.ID_uporabnika";

		$meni2AS = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed2 AS opis2, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed2 WHERE malice.datum = '".$row['DATUM']."' AND jedilnik.datum = '".$row['DATUM']."' AND uporabniki.tip = 1 GROUP BY uporabniki.ID_uporabnika";

		$meni3AS = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed3 AS opis3, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed3 WHERE malice.datum = '".$row['DATUM']."' AND jedilnik.datum = '".$row['DATUM']."' AND uporabniki.tip = 1 GROUP BY uporabniki.ID_uporabnika";

		$skupajAS = "SELECT COUNT(meni) AS st FROM malice INNER JOIN uporabniki on malice.ID_user = uporabniki.ID_uporabnika where malice.datum = '".$row['DATUM']."' AND uporabniki.tip = 1";



//malice za ALU jutri
		$meni1ALU = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed1 AS opis1, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed1 WHERE malice.datum = '".$row['DATUM']."' AND jedilnik.datum = '".$row['DATUM']."' AND uporabniki.tip = 2 GROUP BY uporabniki.ID_uporabnika";

		$meni2ALU = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed2 AS opis2, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed2 WHERE malice.datum = '".$row['DATUM']."' AND jedilnik.datum = '".$row['DATUM']."' AND uporabniki.tip = 2 GROUP BY uporabniki.ID_uporabnika";

		$meni3ALU = "SELECT uporabniki.Ime AS ime, uporabniki.Priimek AS priimek, uporabniki.tip AS tip, malice.meni AS meni, jedilnik.glavnaJed3 AS opis3, DATE_FORMAT(malice.datum,'%d. %m') AS DATUM1 FROM uporabniki INNER JOIN malice ON uporabniki.ID_uporabnika=malice.ID_user INNER JOIN jedilnik ON malice.meni = jedilnik.glavnaJed3 WHERE malice.datum = '".$row['DATUM']."' AND jedilnik.datum = '".$row['DATUM']."' AND uporabniki.tip = 2 GROUP BY uporabniki.ID_uporabnika";

		$skupajALU = "SELECT COUNT(meni) AS st FROM malice INNER JOIN uporabniki on malice.ID_user = uporabniki.ID_uporabnika where malice.datum = '".$row['DATUM']."' AND uporabniki.tip = 2";

		$stMalic1 = "SELECT COUNT(jedilnik.glavnaJed1) AS meni1 FROM jedilnik INNER JOIN malice ON jedilnik.glavnaJed1 = malice.meni WHERE jedilnik.datum = '".$row['DATUM']."'";

		$stMalic2 = "SELECT COUNT(jedilnik.glavnaJed2) AS meni2 FROM jedilnik INNER JOIN malice ON jedilnik.glavnaJed2 = malice.meni WHERE jedilnik.datum = '".$row['DATUM']."'";

		$stMalic3 = "SELECT COUNT(jedilnik.glavnaJed3) AS meni3 FROM jedilnik INNER JOIN malice ON jedilnik.glavnaJed3 = malice.meni WHERE jedilnik.datum = '".$row['DATUM']."'";


//skupajMeniji
		$skupajMeni1 = "SELECT COUNT(meni) AS stevilo FROM malice INNER JOIN jedilnik on malice.meni = jedilnik.glavnaJed1 WHERE malice.datum = '".$row['DATUM']."' AND jedilnik.datum = '".$row['DATUM']."'";

		$skupajMeni2 = "SELECT COUNT(meni) AS stevilo FROM malice INNER JOIN jedilnik on malice.meni = jedilnik.glavnaJed2 WHERE malice.datum = '".$row['DATUM']."' AND jedilnik.datum = '".$row['DATUM']."'";

		$skupajMeni3 = "SELECT COUNT(meni) AS stevilo FROM malice INNER JOIN jedilnik on malice.meni = jedilnik.glavnaJed3 WHERE malice.datum = '".$row['DATUM']."' AND jedilnik.datum = '".$row['DATUM']."'";

		$skupaj = "SELECT COUNT(meni) AS st FROM malice INNER JOIN uporabniki on malice.ID_user = uporabniki.ID_uporabnika where malice.datum = '".$row['DATUM']."'";
	}

	$stM1 = mysqli_query($con, $stMalic1);
	$stM2 = mysqli_query($con, $stMalic2);
	$stM3 = mysqli_query($con, $stMalic3);

	$M1 = $stM1->fetch_assoc();
	$M2 = $stM2->fetch_assoc();
	$M3  = $stM3->fetch_assoc();

	$rezultat1AS = mysqli_query($con, $meni1AS);
	$rezultat2AS = mysqli_query($con, $meni2AS);
	$rezultat3AS = mysqli_query($con, $meni3AS);

	$rezultat1ALU = mysqli_query($con, $meni1ALU);
	$rezultat2ALU = mysqli_query($con, $meni2ALU);
	$rezultat3ALU = mysqli_query($con, $meni3ALU);

	$skupajASQuery = mysqli_query($con, $skupajAS);
	$skupajALUQuery = mysqli_query($con, $skupajALU);
	$skupAS = $skupajASQuery->fetch_assoc();
	$skupALU = $skupajALUQuery->fetch_assoc();


	$skupQueryMeni1 = mysqli_query($con, $skupajMeni1);
	$skupQueryMeni2 = mysqli_query($con, $skupajMeni2);
	$skupQueryMeni3 = mysqli_query($con, $skupajMeni3);
	$skupRezultat1 = $skupQueryMeni1->fetch_assoc();
	$skupRezultat2 = $skupQueryMeni2->fetch_assoc();
	$skupRezultat3 = $skupQueryMeni3->fetch_assoc();

	$skupajQuery = mysqli_query($con, $skupaj);
	$skupajMeniji = $skupajQuery->fetch_assoc();
		
		echo "<button onclick='pregled_print()' class='m-3 d-inline-block btn-primary float-right rounded' id='natisni'>Natisni</button>";
		echo "<div id='printTable'>";
		echo "<p class='text-justify m-2 d-inline-block'>Za datum: ".$row['DATUM1']."</p>";
		echo "<table class='table' cellpadding='10' id='tabela'>
          <thead>
            <tr>
              <th scope='col'></th>
              <th scope='col'>AS Domžale</th>
              <th scope='col'>AS Domžale nadgradnje</th>
              <th scope='col'>Skupaj</th>
            </tr>
          </thead>
          <tbody>
          <tr>
              <th scope='row'>Meni 1</th>
              <td>";
			        while (@$row = $rezultat1AS->fetch_assoc()) {
						echo "<p>".$row['ime']." ".$row['priimek']."</p>";
					}
			echo "</td>";
			echo "<td>";
					while (@$row = $rezultat1ALU->fetch_assoc()) {
						echo "<p>".$row['ime']." ".$row['priimek']."</p>";
					}
        echo "</td>
        	<td>
        		<p>".@$skupRezultat1['stevilo']."</p>
        	</td>
        </tr>
             <tr>
              <th scope='row'>Meni 2</th>
              <td>";
	              	while (@$row = $rezultat2AS->fetch_assoc()) {
						echo "<p>".$row['ime']." ".$row['priimek']."</p>";
					}
			echo "</td>";
			echo "<td>";
					while (@$row = $rezultat2ALU->fetch_assoc()) {
						echo "<p>".$row['ime']." ".$row['priimek']."</p>";

					}
             echo"</td>
             <td>
        		<p>".@$skupRezultat2['stevilo']."</p>
        	</td>
             </tr>
             <tr>
              <th scope='row'>Meni 3</th>
              <td>";
	              while (@$row = $rezultat3AS->fetch_assoc()) {
						echo "<p>".$row['ime']." ".$row['priimek']."</p>";

					}
			echo "</td>";
			echo "<td>";
				  while (@$row = $rezultat3ALU->fetch_assoc()) {
						echo "<p>".$row['ime']." ".$row['priimek']."</p>";
					}
             echo "</td>
             <td>
        		<p>".@$skupRezultat3['stevilo']."</p>
        	</td>
             </tr>
             <tr>";
             echo "<th>Skupaj</th>";
             echo "<td><p>".@$skupAS['st']."</p></td>";
             echo "<td><p>".@$skupALU['st']."</p></td>";
             echo "<td><p>".@$skupajMeniji['st']."</p></td>";
		echo "
		</tr>
		</tbody>
        </table>";
        echo "</div>";




?>