<?php
	include 'povezava_baza.php';

	$poizvedba = "SELECT ime, priimek, ID_uporabnika FROM uporabniki ORDER BY ime";

	$rezultat = mysqli_query($con, $poizvedba);

	echo '<div class="form-group mr-5">
            <select name="ID" class="form-control" id="sel1" onchange="this.form.submit()">';
            echo "<option value='123456543217'>Izberi uporabnika</option>";

	while($row = mysqli_fetch_assoc($rezultat)){

           echo '<option value='.$row['ID_uporabnika'].' '; if(isset($_SESSION['ID'])){if($_SESSION['ID'] == $row['ID_uporabnika']){echo "selected";}}
           echo '>'.$row['ime'].' '.$row['priimek'].'</option>';
     }
     echo '</select>
     </div>';		


?>