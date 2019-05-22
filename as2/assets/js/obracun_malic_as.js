Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0, 10);
});

$(document).ready(function() {
    $('#datum1').val(new Date().toDateInputValue());
    $('#datum2').val(new Date().toDateInputValue());
    razpon($('#sel1').val());
    $('#cena_za_malico').val(5.20);

    $('#cena_za_malico').change(function() {
        datumFields();
    });
});

function razpon(v) {

    var danes = new Date();

    var datum1 = new Date(danes);
    var datum2 = new Date(danes);
    var dd1;
    var dd2;
    var mm1;
    var mm2;
    var yy1;
    var yy2;

    if (v == "danes") {
        dd1 = datum1.getDate();
        dd2 = datum2.getDate();
        mm1 = datum1.getMonth() + 1;
        mm2 = datum2.getMonth() + 1;
        yy1 = datum1.getFullYear();
        yy2 = datum2.getFullYear();
    } else if (v == "vceraj") {
        dd1 = datum1.getDate() - 1;
        dd2 = datum2.getDate() - 1;
        mm1 = datum1.getMonth() + 1;
        mm2 = datum2.getMonth() + 1;
        yy1 = datum1.getFullYear();
        yy2 = datum2.getFullYear();
    } else if (v == "ta_teden") {
        var day = datum1.getDay();
        diff = datum1.getDate() - day + (day == 0 ? -6 : 1);
        datum1 = new Date(datum1.setDate(diff));

        dd1 = datum1.getDate();
        dd2 = datum2.getDate();
        mm1 = datum1.getMonth() + 1;
        mm2 = datum2.getMonth() + 1;
        yy1 = datum1.getFullYear();
        yy2 = datum2.getFullYear();
    } else if (v == "ta_mesec") {

        datum1 = new Date(datum1.getFullYear(), datum1.getMonth(), 1);

        dd1 = datum1.getDate();
        dd2 = datum2.getDate();
        mm1 = datum1.getMonth() + 1;
        mm2 = datum2.getMonth() + 1;
        yy1 = datum1.getFullYear();
        yy2 = datum2.getFullYear();
    } else if (v == "to_leto") {

        datum1 = new Date(datum1.getFullYear(), datum1.getMonth(), 1);

        datum1 = new Date(new Date().getFullYear(), 0, 1);

        dd1 = datum1.getDate();
        dd2 = datum2.getDate();
        mm1 = datum1.getMonth() + 1;
        mm2 = datum2.getMonth() + 1;
        yy1 = datum1.getFullYear();
        yy2 = datum2.getFullYear();
    }

    if (dd1 < 10) {
        dd1 = '0' + dd1
    }
    if (dd2 < 10) {
        dd2 = '0' + dd2
    }
    if (mm1 < 10) {
        mm1 = '0' + mm1
    }
    if (mm2 < 10) {
        mm2 = '0' + mm2
    }
    date1 = yy1 + '-' + mm1 + '-' + dd1;
    date2 = yy2 + '-' + mm2 + '-' + dd2;
    ajax(date1, date2);
}

function datumFields() {
    datum1 = document.getElementById('datum1').value;
    datum2 = document.getElementById('datum2').value;
    ajax(datum1, datum2);
}

function ajax(date1, date2) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'assets/scripts/obracun_m.php?datum1=' + date1 + '&datum2=' + date2, true);
    xhr.send();

    xhr.onreadystatechange = function() {
        var DONE = 4;
        var OK = 200;
        if (xhr.readyState === DONE) {
            if (xhr.status === OK) {
                var data = JSON.parse(this.responseText);

                console.log(data);

                document.getElementById('datum1').value = data[1];
                document.getElementById('datum2').value = data[2];
                ST = data[0].ST;
                datum1 = formatDate(data[1]);
                datum2 = formatDate(data[2]);
                document.getElementById('od_do').innerHTML = "Od: " + datum1 + "<br>Do: " + datum2;
                document.getElementById('nar_malic').innerHTML = ST;
                var cena_za_malico = document.getElementById('cena_za_malico').value;
                var cena = ST * cena_za_malico;
                document.getElementById('cena').innerHTML = cena.toFixed(2) + " €";
            }
        }
    }
}

function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();
    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;
    return [day, month, year].join('-');
}

function natisni_obracun() {
    document.getElementById("natisni").style.visibility = "hidden";
    document.getElementById("menu").style.visibility = "hidden";
    document.getElementById("form").style.visibility = "hidden";
    window.print();
    document.getElementById("natisni").style.visibility = "visible";
    document.getElementById("menu").style.visibility = "visible";
    document.getElementById("form").style.visibility = "visible";
}