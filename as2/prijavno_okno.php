<?php
  $msg = "";

  if(isset($_GET['1'])){
    $msg = "Napacno uporabnisko ime ali geslo !";
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>AS Domzale malice</title>

    <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="assets/css/prijavno_okno.css" rel="stylesheet">

  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="assets/scripts/prijava2.php">
      <img  class="mb-4 img-fluid" src="images/logo.png">
      <p><?php echo @$msg; ?></p>
      <label for="uporabnik" class="sr-only">Uporabniško ime</label>
      <input type="text" name="uporabnik" id="vnosID" class="form-control" placeholder="Uporabniško ime"required autofocus autocomplete="off">
      <input type="password" name="geslo" id="inputPassword" class="form-control" placeholder="Geslo" required>
      <input type="submit" name="submit" class="form-signin btn btn-lg btn-primary btn-block" id="prijava" value="Prijava" />
    </form>
  </body>
</html>