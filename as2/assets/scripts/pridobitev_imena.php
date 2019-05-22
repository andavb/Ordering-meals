<?php
    session_start();

    include 'povezava_baza.php';
        
    $uname = $_SESSION['uporabnisko_ime'];

    $result = mysqli_query($con,"SELECT imePriimek FROM upravitelji WHERE uporabnisko_ime = '".$uname."'");

    if ($result->num_rows == 0) 
    {
            header("Location: prijavno_okno.php");
    }
    else{
        $data = $result->fetch_assoc();
        $ime = $data['imePriimek'];
    }
?>