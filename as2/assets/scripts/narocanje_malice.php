<?php

	include 'povezava_baza.php';

	if(isset($_POST['ID']) && (!empty($_POST['ID'])))
    {
       $ID = $_POST['ID'];

       $result = mysqli_query($con,"SELECT ime, priimek, ID_uporabnika FROM uporabniki WHERE ID_uporabnika = ".$ID."");

        if ($result->num_rows > 0)
        {
           $rezultat = mysqli_fetch_assoc($result);
           session_start();
           $_SESSION['ime'] = $rezultat['ime'];
           $_SESSION['priimek'] = $rezultat['priimek'];
           $_SESSION['ID'] = $rezultat['ID_uporabnika'];

       }
    }

?>
