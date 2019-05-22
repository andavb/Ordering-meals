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
        #jumbo{
            padding: 3%;
        }
    </style>

    <script src="assets/js/narocanje.js"></script>

</head>

<body>
    <div id="right-panel" class="right-panel">
        <div class="breadcrumbs">
            <div class="col-sm-3 m-1">
                    <div class="page-header">
                        <div class="page-title">
                             <a class="navbar-brand" href=""><img src="images/logo.png" alt="Logo"></a>

                            <h1>Naročanje malic</h1>
                        </div>
                    </div>
                </div>
            </div>

             <main class="container-fluid p-5 mt-1">
                <div class="jumbotron p-4" id="jumbo">
                    <form  id="form" class="form-inline" method="post">
                      <div class="form-group mb-2">
                        <input name="ID" type="password" class="form-control" id="ID" placeholder="ID uporabnika" onsubmit="ajax(this.value)" autofocus>
                        <input type="submit" value="Potrdi" name="submit" hidden/>
                      </div>
                    </form>

                    <?php if(isset($_SESSION["ime"])){ ?>

                    <div class="page-title mt-3 mb-3 p-2 bg-warning">
                        <h4 class="d-inline-block"><?php echo @$_SESSION["ime"].' '.@$_SESSION["priimek"]; ?></h4>

                        <h3 class="ml-5 d-inline-block ">Danes: <b class="text-danger"><?php  include 'assets/scripts/malica_danes.php'; ?></b></h3>
                    </div>
                    <form method="post" action="assets/scripts/potrditev_malice.php">
                    <?php
                        include 'assets/scripts/izbira_malice.php';
                    } ?>
                    </form>
                </div>

            </main>
    </div>
</body>

</html>
