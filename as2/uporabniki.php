<?php
    include 'assets/scripts/narocanje_malice.php';
?>

<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Narocanje malic</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <style>
        .btn {
            border-radius: 10px;
            color: white !important;
        }
        .btn-success{
            font-size: 25px;
        }
        .bg-warning{
            border-radius: 10px;
        }
        #jumbo {
          padding: 3%;
        }

    </style>

    <script src="assets/js/uporabniki.narocanje.js"></script>

</head>

<body>
    <p id="nek"></p>
    <div id="right-panel" class="right-panel">
        <div class="breadcrumbs">
            <div class="col-sm-3 m-1">
                    <div class="page-header">
                        <div class="page-title">
                             <a class="navbar-brand" href=""><img src="images/logo.png" alt="Logo"></a>

                            <h1>Naročanje in odjavljanje malic</h1>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary float-right mt-4 mr-3" href="index.php"><i class="menu-icon fa fa-mail-reply"></i> &nbsp;Meni</a>
            </div>

             <main class="container-fluid p-5 mt-1">
                <div class="jumbotron" id="jumbo">
                    <form  id="form" class="form-inline" method="post">
                      <div class="form-group mb-2">
                        <?php include 'assets/scripts/pridobi_uporabnike.php'; ?>
                      </div>
                    </form>

                    <?php if(isset($_SESSION["ime"])){ ?>

                    <div class="page-title  mb-3 p-2 bg-warning">
                        <h4 class="d-inline-block"><?php echo @$_SESSION["ime"].' '.@$_SESSION["priimek"]; ?></h4>
                        <p id="ID" hidden><?php echo @$_SESSION["ID"]; ?></p>

                        <h3 class="ml-5 d-inline-block ">Danes: <b class="text-danger"><?php  include 'assets/scripts/malica_danes.php'; ?></b></h3>
                    </div>
                    <form method="post" action="assets/scripts/potrditev2_malice.php">
                    <?php
                        include 'assets/scripts/izbira_malice_admin.php';
                    } ?>
                    </form>
                </div>

            </main>
    </div>
</body>

</html>
