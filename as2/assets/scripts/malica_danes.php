<?php

	include 'povezava_baza.php';

	$ID = $_SESSION['ID'];

	$result = mysqli_query($con,"SELECT meni FROM malice WHERE ID_user = ".$ID." AND datum = CURDATE()");

    $num_rows = $result->num_rows;

    if ($num_rows > 0) 
    {
        $rezultat = mysqli_fetch_assoc($result);
        echo $rezultat["meni"];
    }

?>