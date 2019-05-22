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

    <script src="assets/js/funkcije.js"></script>
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
                            <h1>Jedilnik</h1>
                        </div>
                    </div>
                </div>
            </div>

        <button onclick='jedilnik()' class='m-2 mr-4 float-right btn-primary rounded' id="natisni">Natisni</button>

            <div class="agenda mx-4">
                <div class="table-responsive">
                    <table class="table table-condensed table-bordered" id="printTable">
                        <thead>
                            <tr>
                                <th>Datum</th>
                                <th class="text-center">Meni 1</th>
                                <th class="text-center">Meni 2</th>
                                <th class="text-center">Meni 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'assets/scripts/tabela_jedilnik.php'; ?>     
                        </tbody>
                    </table>
                </div>
            </div> <!-- .content -->
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
