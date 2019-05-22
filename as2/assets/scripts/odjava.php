<?php
    session_start();
    session_destroy();
    header("Location: ../../prijavno_okno.php");
?>