        
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