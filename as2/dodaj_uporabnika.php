<?php
    include 'assets/scripts/pridobitev_imena.php';
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AS Domžale - malice</title>
    <meta name="description" content="AS Domžale - malice">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    jQuery(document).ready(function ($) {
      $("#objavi").click(function(event){

        if(document.getElementById("alert")){
           document.getElementById("alert").remove();
        }

        var podatki = {
          ime : document.getElementById("ime").value,
          priimek : document.getElementById("priimek").value,
          id : document.getElementById("idUporabnika").value,
          tip : document.getElementById("sel1").value
        };

        $.ajax({
            url: 'assets/scripts/dodajUporabnika.php',
            type: 'post',
            data: podatki,
            success: function(response){
              var rezultat = JSON.parse(response);
              if(rezultat[0] == 1){
                var izpisi = "<div class='alert alert-success' role='alert' id='alert'>Uspesno ste dodali novega uporabnika "+rezultat[1]+" "+rezultat[2]+" z ID: "+rezultat[3]+"</div>";
                $(".div1").prepend(izpisi);
              }
              else if(rezultat[0] == 2){
                var izpisi = "<div class='alert alert-success' role='alert' id='alert'>Uspešno ste spremenili uporabnika "+rezultat[4]+" "+rezultat[5]+" z ID: "+rezultat[3]+" v novega uporabnika "+rezultat[1]+" "+rezultat[2]+"</div>";
                $(".div1").prepend(izpisi);
              }
            },
            error: function( jqXhr, textStatus, errorThrown ){
              var izpisi = "<div class='alert alert-danger' role='alert' id='alert'>Prislo je do napake! Vnos ni bil uspešen!</div>";
              $(".div1").prepend(izpisi);
            }
        });
      });
    });
  </script>
</head>
<body>
     <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation" id="menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="border bg-primary rounded pl-3 ">
                        <a> <i class=" text-light menu-icon fa fa-user"></i><?php echo $ime?> </a>
                    </li>
                    <li class="active pl-3">
                        <a href="./"> <i class="menu-icon fa fa-calendar"></i>Jedilnik </a>
                    </li>
                    <li class="pl-3">
                        <a href="narocanje.php"> <i class="menu-icon fa fa-cart-plus"></i>Naročanje malic </a>
                    </li>
                    <li class="pl-3">
                        <a href="vpis_malic.php"> <i class="menu-icon fa fa-pencil-square-o"></i>Vpis malic </a>
                    </li>
                    <li class="pl-3">
                        <a href="pregled_malic.php"> <i class="menu-icon fa fa-bar-chart"></i>Pregled malic </a>
                    </li>
                    <li class="pl-3 menu-item-has-children dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Obračun malic</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-building"></i><a href="obracun_malic_as.php">AS Domžale</a></li>
                            <li><i class="fa fa-building-o"></i><a href="obracun_malic_alu.php">AS Domžale ALU</a></li>
                        </ul>
                    </li>
                    <li class="pl-3 menu-item-has-children dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Obračun uporabnikov</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-building"></i><a href="obracun_uporabnikov_AS.php">AS Domžale</a></li>
                            <li><i class="fa fa-building-o"></i><a href="obracun_uporabnikov_ALU.php">AS Domžale ALU</a></li>
                        </ul>
                    </li>
                    <li class="pl-3">
                        <a href="uporabniki.php"> <i class="menu-icon fa fa-address-book-o"></i>Uporabniki</a>
                    </li>
                    <li class="pl-3 menu-item-has-children dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-plus"></i>Registriraj</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user-circle-o"></i><a href="dodaj_uporabnika.php">Dodaj uporabnika</a></li>
                            <li><i class="fa fa-user-circle"></i><a href="dodaj_upravitelja.php">Dodaj upravitelja</a></li>
                        </ul>
                    </li>
                    <li class="pl-3">
                        <a href="assets/scripts/odjava.php"> <i class="menu-icon fa fa-power-off"></i>Odjava</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

   <div id="right-panel" class="right-panel">
      <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dodaj novega uporabnika</h1>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-md-6 order-md-1 mt-3 div1" id="div1">
          <form class="form-group">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Ime</label>
                <input type="text" class="form-control" id="ime" name="ime" placeholder="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Priimek</label>
                <input type="text" class="form-control" id="priimek" name="priimek" placeholder="" required>
              </div>
            </div>

            <div class="mb-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">ID</span>
                </div>
                <input type="number" class="form-control" id="idUporabnika" name="id" placeholder="" required>
              </div>
            </div>

            <select class="form-control" id="sel1" name="tip">
                <option value="1">AS Domžale d.o.o.</option>
                <option value="2">AS Domžale nadgradnje d.o.o.</option>
            </select>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block rounded" type="button" id="objavi">Dodaj</button>
          </form>
        </div>
    </div>

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>

</body>
</html>
