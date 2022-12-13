$("#Rue").keyup(function(event) {
    // Stop la propagation par défaut
          event.preventDefault();
          event.stopPropagation();
  
          let rue = $("#Rue").val();
          $.get('https://api-adresse.data.gouv.fr/search/', {
              q: rue,
              limit: 10,
              autocomplete: 1
          }, function (data, status, xhr) {
              let liste = "";
              $.each(data.features, function(i, obj) {
                  console.log(obj.properties);
                  // données phase 1 (obj.properties.label) & phase 2 : name, postcode, city
                  // J'ajoute chaque élément dans une liste
                  liste += '<li><a href="#" name="'+obj.properties.label+'" data-name="'+obj.properties.name+'" data-postcode="'+obj.properties.postcode+'" data-city="'+obj.properties.city+'">'+obj.properties.label+'</a></li>';
              });
              $('.adress-feedback ul').html(liste);
  
              // ToDo: Au clic du lien voulu, on envoie l'info en $_POST
              $('.adress-feedback ul>li').on("click","a", function(event) {
                  // Stop la propagation par défaut
                  event.preventDefault();
                  event.stopPropagation();
  
                  let adresse = $(this).attr("name");
  
                  $("#Rue").val($(this).attr("data-name"));
                  $("#CodePostal").val($(this).attr("data-postcode"));
                  $("#Ville").val($(this).attr("data-city"));
  
                  $('.adress-feedback ul').empty();
              });
              
  
          }).error(function () {
              // alert( "error" );
          }).always(function () {
              // alert( "finished" );
          }, 'json');
      });