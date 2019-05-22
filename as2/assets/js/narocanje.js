

$("#form").submit(function(e) {
        var form = $(this);
        var url = form.attr('action');

        console.log(form);
        console.log(url);

        $.ajax({
               type: "POST",
               url: "assets/scripts/narocanje_malice.php",
               data: form.serialize(), // serializes the form's elements.
               success: function(data)
               {
                   alert(data); // show response from the php script.
               }
             });

        e.preventDefault(); // avoid to execute the actual submit of the form.

    });
