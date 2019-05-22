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

    <script src="assets/js/vpis.js">

        var stevilo = 0;

        function pridobiDatume(st){

            var curr = new Date;
            var first = curr.getDate() - curr.getDay();

            var d;

            if(st >= 1){
                stevilo += 7;
            }
            else if (st <= 1 && st != 0){
                stevilo -= 7
            }
            else{
                stevilo = 0;
            }

            for (var i = 1+stevilo; i < 6+stevilo; i++) {
    
                var next = new Date(curr.getTime());
                next.setDate(first + i);

                var datestring = ("0" + next.getDate()).slice(-2) + "." + ("0"+(next.getMonth()+1)).slice(-2);

                document.getElementById("dan"+(i-stevilo)).innerHTML =  datestring;
                document.getElementById("d"+(i-stevilo)).value =  formatDate(next);


                d = next;
            }

            ajaxMalice(d);
        }

        function ajaxMalice(dan){
            var n = document.getElementById("dan1").innerHTML;
            var datum = formatDate(dan);

            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'assets/scripts/pridobi_malice.php?datum='+datum, true);
            xhr.send();

            for(var l=1; l <= 3; l++){
                $("#pon"+l).val("").css("background-color", "white");
                $("#ponSolata"+l).val("").css("background-color", "white");
                $("#ponSladica"+l).val("").css("background-color", "white");

                $("#tor"+l).val("").css("background-color", "white");
                $("#torSolata"+l).val("").css("background-color", "white");
                $("#torSladica"+l).val("").css("background-color", "white");

                $("#sre"+l).val("").css("background-color", "white");
                $("#sreSolata"+l).val("").css("background-color", "white");
                $("#sreSladica"+l).val("").css("background-color", "white");

                $("#cet"+l).val("").css("background-color", "white");
                $("#cetSolata"+l).val("").css("background-color", "white");
                $("#cetSladica"+l).val("").css("background-color", "white");

                $("#pet"+l).val("").css("background-color", "white");
                $("#petSolata"+l).val("").css("background-color", "white");
                $("#petSladica"+l).val("").css("background-color", "white");

            }

            xhr.onreadystatechange = function () {
                var DONE = 4;
                var OK = 200;
                if (xhr.readyState === DONE) {
                    if (xhr.status === OK) {
                        var data = JSON.parse(this.responseText);

                        console.log(data);

                        for(var i = 0; i < data.length; i++){
                            var meni1 = data[i].glavnaJed1;
                            var meni2 = data[i].glavnaJed2;
                            var meni3 = data[i].glavnaJed3;

                            var meniSolata1 = data[i].solata1;
                            var meniSolata2 = data[i].solata2;
                            var meniSolata3 = data[i].solata3;

                            var meniSladica1 = data[i].sladica1;
                            var meniSladica2 = data[i].sladica2;
                            var meniSladica3 = data[i].sladica3;

                            var datum = data[i].datum;
                            var imeDneva = data[i].DanIme;

                            if(imeDneva == "Monday"){
                                if(meni1 != null && meni1 != ""){
                                    $("#pon1").val(meni1).css("background-color", "#efffcc");
                                }
                                if(meni2 != null && meni2 != ""){
                                    $("#pon2").val(meni2).css("background-color", "#efffcc");
                                }
                                if(meni3 != null && meni3 != ""){
                                    $("#pon3").val(meni3).css("background-color", "#efffcc");
                                }


                                if(meniSolata1 != null && meniSolata1 != ""){
                                    $("#ponSolata1").val(meniSolata1).css("background-color", "#efffcc");
                                }
                                if(meniSolata2 != null && meniSolata2 != ""){
                                    $("#ponSolata2").val(meniSolata2).css("background-color", "#efffcc");
                                }
                                if(meniSolata3 != null && meniSolata3 != ""){
                                    $("#ponSolata3").val(meniSolata3).css("background-color", "#efffcc");
                                }


                                if(meniSladica1 != null && meniSladica1 != ""){
                                    $("#ponSladica1").val(meniSladica1).css("background-color", "#efffcc");
                                }
                                if(meniSladica2 != null && meniSladica2 != ""){
                                    $("#ponSladica2").val(meniSladica2).css("background-color", "#efffcc");
                                }
                                if(meniSladica3 != null && meniSladica3 != ""){
                                    $("#ponSladica3").val(meniSladica3).css("background-color", "#efffcc");
                                }

                            }
                            else if(imeDneva == "Tuesday"){
                                if(meni1 != null && meni1 != ""){
                                    $("#tor1").val(meni1).css("background-color", "#efffcc");
                                }
                                if(meni2 != null && meni2 != ""){
                                    $("#tor2").val(meni2).css("background-color", "#efffcc");
                                }
                                if(meni3 != null && meni3 != ""){
                                    $("#tor3").val(meni3).css("background-color", "#efffcc");
                                }


                                if(meniSolata1 != null && meniSolata1 != ""){
                                    $("#torSolata1").val(meniSolata1).css("background-color", "#efffcc");
                                }
                                if(meniSolata2 != null && meniSolata2 != ""){
                                    $("#torSolata2").val(meniSolata2).css("background-color", "#efffcc");
                                }
                                if(meniSolata3 != null && meniSolata3 != ""){
                                    $("#torSolata3").val(meniSolata3).css("background-color", "#efffcc");
                                }
                                

                                if(meniSladica1 != null && meniSladica1 != ""){
                                    $("#torSladica1").val(meniSladica1).css("background-color", "#efffcc");
                                }
                                if(meniSladica2 != null && meniSladica2 != ""){
                                    $("#torSladica2").val(meniSladica2).css("background-color", "#efffcc");
                                }
                                if(meniSladica3 != null && meniSladica3 != ""){
                                    $("#torSladica3").val(meniSladica3).css("background-color", "#efffcc");
                                }
                            }
                            else if(imeDneva == "Wednesday"){
                                if(meni1 != null && meni1 != ""){
                                    $("#sre1").val(meni1).css("background-color", "#efffcc");
                                }
                                if(meni2 != null && meni2 != ""){
                                    $("#sre2").val(meni2).css("background-color", "#efffcc");
                                }
                                if(meni3 != null && meni3 != ""){
                                    $("#sre3").val(meni3).css("background-color", "#efffcc");
                                }


                                if(meniSolata1 != null && meniSolata1 != ""){
                                    $("#sreSolata1").val(meniSolata1).css("background-color", "#efffcc");
                                }
                                if(meniSolata2 != null && meniSolata2 != ""){
                                    $("#sreSolata2").val(meniSolata2).css("background-color", "#efffcc");
                                }
                                if(meniSolata3 != null && meniSolata3 != ""){
                                    $("#sreSolata3").val(meniSolata3).css("background-color", "#efffcc");
                                }
                                

                                if(meniSladica1 != null && meniSladica1 != ""){
                                    $("#sreSladica1").val(meniSladica1).css("background-color", "#efffcc");
                                }
                                if(meniSladica2 != null && meniSladica2 != ""){
                                    $("#sreSladica2").val(meniSladica2).css("background-color", "#efffcc");
                                }
                                if(meniSladica3 != null && meniSladica3 != ""){
                                    $("#sreSladica3").val(meniSladica3).css("background-color", "#efffcc");
                                }
                            }
                            else if(imeDneva == "Thursday"){
                                if(meni1 != null && meni1 != ""){
                                    $("#cet1").val(meni1).css("background-color", "#efffcc");
                                }
                                if(meni2 != null && meni2 != ""){
                                    $("#cet2").val(meni2).css("background-color", "#efffcc");
                                }
                                if(meni3 != null && meni3 != ""){
                                    $("#cet3").val(meni3).css("background-color", "#efffcc");
                                }


                                if(meniSolata1 != null && meniSolata1 != ""){
                                    $("#cetSolata1").val(meniSolata1).css("background-color", "#efffcc");
                                }
                                if(meniSolata2 != null && meniSolata2 != ""){
                                    $("#cetSolata2").val(meniSolata2).css("background-color", "#efffcc");
                                }
                                if(meniSolata3 != null && meniSolata3 != ""){
                                    $("#cetSolata3").val(meniSolata3).css("background-color", "#efffcc");
                                }
                                

                                if(meniSladica1 != null && meniSladica1 != ""){
                                    $("#cetSladica1").val(meniSladica1).css("background-color", "#efffcc");
                                }
                                if(meniSladica2 != null && meniSladica2 != ""){
                                    $("#cetSladica2").val(meniSladica2).css("background-color", "#efffcc");
                                }
                                if(meniSladica3 != null && meniSladica3 != ""){
                                    $("#cetSladica3").val(meniSladica3).css("background-color", "#efffcc");
                                }
                            }
                            else if(imeDneva == "Friday"){
                                if(meni1 != null && meni1 != ""){
                                    $("#pet1").val(meni1).css("background-color", "#efffcc");
                                }
                                if(meni2 != null && meni2 != ""){
                                    $("#pet2").val(meni2).css("background-color", "#efffcc");
                                }
                                if(meni3 != null && meni3 != ""){
                                    $("#pet3").val(meni3).css("background-color", "#efffcc");
                                }


                                if(meniSolata1 != null && meniSolata1 != ""){
                                    $("#petSolata1").val(meniSolata1).css("background-color", "#efffcc");
                                }
                                if(meniSolata2 != null && meniSolata2 != ""){
                                    $("#petSolata2").val(meniSolata2).css("background-color", "#efffcc");
                                }
                                if(meniSolata3 != null && meniSolata3 != ""){
                                    $("#petSolata3").val(meniSolata3).css("background-color", "#efffcc");
                                }
                                

                                if(meniSladica1 != null && meniSladica1 != ""){
                                    $("#petSladica1").val(meniSladica1).css("background-color", "#efffcc");
                                }
                                if(meniSladica2 != null && meniSladica2 != ""){
                                    $("#petSladica2").val(meniSladica2).css("background-color", "#efffcc");
                                }
                                if(meniSladica3 != null && meniSladica3 != ""){
                                    $("#petSladica3").val(meniSladica3).css("background-color", "#efffcc");
                                }
                            }
                        }
                    } else {
                        console.log('Error: ' + xhr.status);
                    }
                }
            };

        }

        function formatDate(date) {
            var d = new Date(date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();

            if (month.length < 2) month = '0' + month;
            if (day.length < 2) day = '0' + day;

            return [year, month, day].join('-');
        }  

        $( document ).ready(function() {

        });

        


    </script>
    <style type="text/css">

    </style>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body onLoad="pridobiDatume(0)"> 
     <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>  
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="border bg-primary rounded pl-3 ">
                        <a> <i class=" text-light menu-icon fa fa-user"></i><?php echo $ime ?> </a>
                    </li>
                    <li class="pl-3">
                        <a href="./"> <i class="menu-icon fa fa-calendar"></i>Jedilnik </a>
                    </li>
                    <li class="pl-3">
                        <a href="narocanje.php"> <i class="menu-icon fa fa-cart-plus"></i>Naročanje malic </a>
                    </li>
                    <li class="active pl-3">
                        <a href="" onClick="pridobiDatume(0)"> <i class="menu-icon fa fa-pencil-square-o "></i>Vpis malic </a>
                    </li>
                    <li class="pl-3">
                        <a href="pregled_malic.php"> <i class="menu-icon fa fa-bar-chart"></i>Pregled malic </a>
                    </li>
                    <li class="pl-3 menu-item-has-children dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Obračun malic </a>
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
                         <h1>Vpis malic</h1>
                    </div>
                </div>
            </div>
         </div>

         <button type="button" class="btn btn-success rounded m-2 inline-block float-left" onClick="pridobiDatume(-1)">Nazaj</button>
         <button type="button" class="btn btn-success rounded m-2 inline-block float-right" onClick="pridobiDatume(+1)">Naprej</button>

         <table class="table table-striped pl-3">
            <form class="form-inline" action="assets/scripts/vpis_m.php" method="post">
              <tbody>
                <tr>
                    <td>
                   </td>
                   <td class="text-center">
                        <h5>Meni 1</h5>
                   </td>
                   <td class="text-center">
                        <h5>Meni 2</h5>
                   </td>
                   <td class="text-center">
                        <h5>Meni 3</h5>
                   </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group m-1">
                        <label for="pon"><input type="text" name="d1" id="d1" value="" hidden><h5 class="d-inline-block mr-2">Ponedeljek</h5><div class="shortdate text-muted d-inline-block" id="dan1"></div></label>
                    </div>
                   </td>
                   <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="pon1" placeholder="Vnesite glavno jed" name="pon1" value="">
                        <input type="text" class="form-control mb-1" id="ponSolata1" placeholder="Vnesite solato" name="ponSolata1" value="">
                        <input type="text" class="form-control" id="ponSladica1" placeholder="Vnesite sladico/sadje" name="ponSladica1" value="">
                    </div>
                   </td>
                   <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="pon2" placeholder="Vnesite glavno jed" name="pon2" value="">
                        <input type="text" class="form-control mb-1" id="ponSolata2" placeholder="Vnesite solato" name="ponSolata2" value="">
                        <input type="text" class="form-control" id="ponSladica2" placeholder="Vnesite sladico/sadje" name="ponSladica2" value="">
                    </div>
                   </td>
                   <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="pon3" placeholder="Vnesite glavno jed" name="pon3" value="">
                        <input type="text" class="form-control mb-1" id="ponSolata3" placeholder="Vnesite solato" name="ponSolata3" value="">
                        <input type="text" class="form-control" id="ponSladica3" placeholder="Vnesite sladico/sadje" name="ponSladica3" value="">
                    </div>
                   </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group m-1">
                        <label for="tor"><input type="text" name="d2" id="d2" value="" hidden><h5 class="d-inline-block mr-2">Torek</h5><div class="shortdate text-muted d-inline-block" id="dan2"></div></label>
                    </div>
                   </td>
                    <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="tor1" placeholder="Vnesite glavno jed" name="tor1" value="">
                        <input type="text" class="form-control mb-1" id="torSolata1" placeholder="Vnesite solato" name="torSolata1" value="">
                        <input type="text" class="form-control" id="torSladica1" placeholder="Vnesite sladico/sadje" name="torSladica1" value="">
                    </div>
                   </td>
                   <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="tor2" placeholder="Vnesite glavno jed" name="tor2" value="">
                        <input type="text" class="form-control mb-1" id="torSolata2" placeholder="Vnesite solato" name="torSolata2" value="">
                        <input type="text" class="form-control" id="torSladica2" placeholder="Vnesite sladico/sadje" name="torSladica2" value="">
                    </div>
                   </td>
                   <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="tor3" placeholder="Vnesite glavno jed" name="tor3" value="">
                        <input type="text" class="form-control mb-1" id="torSolata3" placeholder="Vnesite solato" name="torSolata3" value="">
                        <input type="text" class="form-control" id="torSladica3" placeholder="Vnesite sladico/sadje" name="torSladica3" value="">
                    </div>
                   </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group m-1">
                        <label for="sre"><input type="text" name="d3" id="d3" value="" hidden><h5 class="d-inline-block mr-2">Sreda</h5><div class="shortdate text-muted d-inline-block" id="dan3"></div></label>
                    </div>
                   </td>
                    <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="sre1" placeholder="Vnesite glavno jed" name="sre1" value="">
                        <input type="text" class="form-control mb-1" id="sreSolata1" placeholder="Vnesite solato" name="sreSolata1" value="">
                        <input type="text" class="form-control" id="sreSladica1" placeholder="Vnesite sladico/sadje" name="sreSladica1" value="">
                    </div>
                   </td>
                   <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="sre2" placeholder="Vnesite glavno jed" name="sre2" value="">
                        <input type="text" class="form-control mb-1" id="sreSolata2" placeholder="Vnesite solato" name="sreSolata2" value="">
                        <input type="text" class="form-control" id="sreSladica2" placeholder="Vnesite sladico/sadje" name="sreSladica2" value="">
                    </div>
                   </td>
                   <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="sre3" placeholder="Vnesite glavno jed" name="sre3" value="">
                        <input type="text" class="form-control mb-1" id="sreSolata3" placeholder="Vnesite solato" name="sreSolata3" value="">
                        <input type="text" class="form-control" id="sreSladica3" placeholder="Vnesite sladico/sadje" name="sreSladica3" value="">
                    </div>
                   </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group m-1">
                        <label for="cet"><input type="text" name="d4" id="d4" value="" hidden><h5 class="d-inline-block mr-2">Četrtek</h5><div class="shortdate text-muted d-inline-block" id="dan4"></div></label>
                    </div>
                   </td>
                    <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="cet1" placeholder="Vnesite glavno jed" name="cet1" value="">
                        <input type="text" class="form-control mb-1" id="cetSolata1" placeholder="Vnesite solato" name="cetSolata1" value="">
                        <input type="text" class="form-control" id="cetSladica1" placeholder="Vnesite sladico/sadje" name="cetSladica1" value="">
                    </div>
                   </td>
                   <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="cet2" placeholder="Vnesite glavno jed" name="cet2" value="">
                        <input type="text" class="form-control mb-1" id="cetSolata2" placeholder="Vnesite solato" name="cetSolata2" value="">
                        <input type="text" class="form-control" id="cetSladica2" placeholder="Vnesite sladico/sadje" name="cetSladica2" value="">
                    </div>
                   </td>
                   <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="cet3" placeholder="Vnesite glavno jed" name="cet3" value="">
                        <input type="text" class="form-control mb-1" id="cetSolata3" placeholder="Vnesite solato" name="cetSolata3" value="">
                        <input type="text" class="form-control" id="cetSladica3" placeholder="Vnesite sladico/sadje" name="cetSladica3" value="">
                    </div>
                   </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group m-1">
                        <label for="pet"><input type="text" name="d5" id="d5" value="" hidden><h5 class="d-inline-block mr-2">Petek</h5><div class="shortdate text-muted d-inline-block" id="dan5"></div></label>
                    </div>
                   </td>
                    <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="pet1" placeholder="Vnesite glavno jed" name="pet1" value="">
                        <input type="text" class="form-control mb-1" id="petSolata1" placeholder="Vnesite solato" name="petSolata1" value="">
                        <input type="text" class="form-control" id="petSladica1" placeholder="Vnesite sladico/sadje" name="petSladica1" value="">
                    </div>
                   </td>
                   <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="pet2" placeholder="Vnesite glavno jed" name="pet2" value="">
                        <input type="text" class="form-control mb-1" id="petSolata2" placeholder="Vnesite solato" name="petSolata2" value="">
                        <input type="text" class="form-control" id="petSladica2" placeholder="Vnesite sladico/sadje" name="petSladica2" value="">
                    </div>
                   </td>
                   <td>
                    <div class = "form-group m-1">
                        <input type="text" class="form-control mb-1" id="pet3" placeholder="Vnesite glavno jed" name="pet3" value="">
                        <input type="text" class="form-control mb-1" id="petSolata3" placeholder="Vnesite solato" name="petSolata3" value="">
                        <input type="text" class="form-control" id="petSladica3" placeholder="Vnesite sladico/sadje" name="petSladica3" value="">
                    </div>
                   </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input class="btn btn-primary btn-lg btn-block rounded" type="submit" value="Objavi">
                    </td>
                </tr>
              </tbody>
            </form>
        </table>
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
