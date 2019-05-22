$("#form").submit(function(e) {

        var form = $(this);
        var url = form.attr('action');


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