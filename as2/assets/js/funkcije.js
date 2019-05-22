
//vecina funkcij za app
function jedilnik(){
     document.getElementById("natisni").style.visibility = "hidden";
     document.getElementById("menu").style.visibility = "hidden";
     window.print();
     document.getElementById("natisni").style.visibility = "visible";
     document.getElementById("menu").style.visibility = "visible";

}
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
