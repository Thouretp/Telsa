<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test adresse</title>
</head>

<body>
    <table>
        <th>
            <h2>Adresse rue 1</h2>
            <p>{{$adresse[0]->adresserue1}}</p>
        </th>

    </table>
    <div class="container">
        <div class="row">
          <div class="col-6 adresse">
            <form novalidate>
              <div class="form-row">
                <label>Adresse</label>
                <div class="autocomplete-container" id="autocomplete-container"></div>
                <input type="text" class="block mt-1 w-full" class="form-control" id="Rue" name="Rue" placeholder="Adresse">
                <input type="text" class="form-control" pattern="^[0-9]{1}[0-9a-bA-B]{1}[0-9]{3}$" id="CodePostal" minlength="5" maxlength="5" placeholder="Code Postal">
                <input type="text" class="form-control" id="Ville" name="Ville" placeholder="Ville">
                <input type="text" class="form-control" id="Pays" name="Pays" placeholder="Pays">
              </div>
            </form>
          </div>
          <div class="col-6 proposition">
            <div class="adress-feedback">
              <ul></ul>
            </div>
          </div>
        </div>
      </div>
</body>

</html>

<script src="{{asset('js/api.js')}}"></script>
