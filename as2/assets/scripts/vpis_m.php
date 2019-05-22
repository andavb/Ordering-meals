
<?php

  if(isset($_POST)){
    include 'povezava_baza.php';


    if(!(empty($_POST['pon1']) && empty($_POST['pon2']) && empty($_POST['pon3']))){
      $meni1 = $_POST['pon1'];
      $meni2 = $_POST['pon2'];
      $meni3 = $_POST['pon3'];

      $meniSolata1 = $_POST['ponSolata1'];
      $meniSolata2 = $_POST['ponSolata2'];
      $meniSolata3 = $_POST['ponSolata3'];

      $meniSladica1 = $_POST['ponSladica1'];
      $meniSladica2 = $_POST['ponSladica2'];
      $meniSladica3 = $_POST['ponSladica3'];

      $datum = $_POST['d1'];

      $zapis = "INSERT INTO jedilnik (glavnaJed1, glavnaJed2, glavnaJed3, solata1, solata2, solata3, sladica1, sladica2, sladica3, datum) VALUES ('".$meni1."','".$meni2."','".$meni3."','".$meniSolata1."','".$meniSolata2."','".$meniSolata3."','".$meniSladica1."','".$meniSladica2."','".$meniSladica3."','".$datum."') ON DUPLICATE KEY UPDATE glavnaJed1='".$meni1."', glavnaJed2='".$meni2."', glavnaJed3='".$meni3."', solata1='".$meniSolata1."', solata2='".$meniSolata2."', solata3='".$meniSolata3."', sladica1='".$meniSladica1."', sladica2='".$meniSladica2."', sladica3='".$meniSladica3."' ";

      mysqli_query($con, $zapis);
    }
    if(!(empty($_POST['tor1']) && empty($_POST['tor2']) && empty($_POST['tor3']))){
      $meni1 = $_POST['tor1'];
      $meni2 = $_POST['tor2'];
      $meni3 = $_POST['tor3'];

      $meniSolata1 = $_POST['torSolata1'];
      $meniSolata2 = $_POST['torSolata2'];
      $meniSolata3 = $_POST['torSolata3'];

      $meniSladica1 = $_POST['torSladica1'];
      $meniSladica2 = $_POST['torSladica2'];
      $meniSladica3 = $_POST['torSladica3'];

      $datum = $_POST['d2'];

      $zapis = "INSERT INTO jedilnik (glavnaJed1, glavnaJed2, glavnaJed3, solata1, solata2, solata3, sladica1, sladica2, sladica3, datum) VALUES ('".$meni1."','".$meni2."','".$meni3."','".$meniSolata1."','".$meniSolata2."','".$meniSolata3."','".$meniSladica1."','".$meniSladica2."','".$meniSladica3."','".$datum."') ON DUPLICATE KEY UPDATE glavnaJed1='".$meni1."', glavnaJed2='".$meni2."', glavnaJed3='".$meni3."', solata1='".$meniSolata1."', solata2='".$meniSolata2."', solata3='".$meniSolata3."', sladica1='".$meniSladica1."', sladica2='".$meniSladica2."', sladica3='".$meniSladica3."' ";

      mysqli_query($con, $zapis);
    }
    if(!(empty($_POST['sre1']) && empty($_POST['sre2']) && empty($_POST['sre3']))){
      $meni1 = $_POST['sre1'];
      $meni2 = $_POST['sre2'];
      $meni3 = $_POST['sre3'];

      $meniSolata1 = $_POST['sreSolata1'];
      $meniSolata2 = $_POST['sreSolata2'];
      $meniSolata3 = $_POST['sreSolata3'];

      $meniSladica1 = $_POST['sreSladica1'];
      $meniSladica2 = $_POST['sreSladica2'];
      $meniSladica3 = $_POST['sreSladica3'];

      $datum = $_POST['d3'];

      $zapis = "INSERT INTO jedilnik (glavnaJed1, glavnaJed2, glavnaJed3, solata1, solata2, solata3, sladica1, sladica2, sladica3, datum) VALUES ('".$meni1."','".$meni2."','".$meni3."','".$meniSolata1."','".$meniSolata2."','".$meniSolata3."','".$meniSladica1."','".$meniSladica2."','".$meniSladica3."','".$datum."') ON DUPLICATE KEY UPDATE glavnaJed1='".$meni1."', glavnaJed2='".$meni2."', glavnaJed3='".$meni3."', solata1='".$meniSolata1."', solata2='".$meniSolata2."', solata3='".$meniSolata3."', sladica1='".$meniSladica1."', sladica2='".$meniSladica2."', sladica3='".$meniSladica3."' ";

      mysqli_query($con, $zapis);
    }
    if(!(empty($_POST['cet1']) && empty($_POST['cet2']) && empty($_POST['cet3']))){
      $meni1 = $_POST['cet1'];
      $meni2 = $_POST['cet2'];
      $meni3 = $_POST['cet3'];

      $meniSolata1 = $_POST['cetSolata1'];
      $meniSolata2 = $_POST['cetSolata2'];
      $meniSolata3 = $_POST['cetSolata3'];

      $meniSladica1 = $_POST['cetSladica1'];
      $meniSladica2 = $_POST['cetSladica2'];
      $meniSladica3 = $_POST['cetSladica3'];

      $datum = $_POST['d4'];

      $zapis = "INSERT INTO jedilnik (glavnaJed1, glavnaJed2, glavnaJed3, solata1, solata2, solata3, sladica1, sladica2, sladica3, datum) VALUES ('".$meni1."','".$meni2."','".$meni3."','".$meniSolata1."','".$meniSolata2."','".$meniSolata3."','".$meniSladica1."','".$meniSladica2."','".$meniSladica3."','".$datum."') ON DUPLICATE KEY UPDATE glavnaJed1='".$meni1."', glavnaJed2='".$meni2."', glavnaJed3='".$meni3."', solata1='".$meniSolata1."', solata2='".$meniSolata2."', solata3='".$meniSolata3."', sladica1='".$meniSladica1."', sladica2='".$meniSladica2."', sladica3='".$meniSladica3."' ";

      mysqli_query($con, $zapis);
    }
    if(!(empty($_POST['pet1']) && empty($_POST['pet2']) && empty($_POST['pet3']))){
      $meni1 = $_POST['pet1'];
      $meni2 = $_POST['pet2'];
      $meni3 = $_POST['pet3'];

      $meniSolata1 = $_POST['petSolata1'];
      $meniSolata2 = $_POST['petSolata2'];
      $meniSolata3 = $_POST['petSolata3'];

      $meniSladica1 = $_POST['petSladica1'];
      $meniSladica2 = $_POST['petSladica2'];
      $meniSladica3 = $_POST['petSladica3'];

      $datum = $_POST['d5'];

      $zapis = "INSERT INTO jedilnik (glavnaJed1, glavnaJed2, glavnaJed3, solata1, solata2, solata3, sladica1, sladica2, sladica3, datum) VALUES ('".$meni1."','".$meni2."','".$meni3."','".$meniSolata1."','".$meniSolata2."','".$meniSolata3."','".$meniSladica1."','".$meniSladica2."','".$meniSladica3."','".$datum."') ON DUPLICATE KEY UPDATE glavnaJed1='".$meni1."', glavnaJed2='".$meni2."', glavnaJed3='".$meni3."', solata1='".$meniSolata1."', solata2='".$meniSolata2."', solata3='".$meniSolata3."', sladica1='".$meniSladica1."', sladica2='".$meniSladica2."', sladica3='".$meniSladica3."' ";

      mysqli_query($con, $zapis);
    }

    header("Location: ../../vpis_malic.php");

  }
  else{
    echo "error";
    die();
  }



?>