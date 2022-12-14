<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.7.3/themes/base/jquery-ui.css">
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
                <input type="text" class="block mt-1 w-full" class="form-control" id="Rue" name="Rue" placeholder="Adresse">
                <input type="text" class="form-control" pattern="^[0-9]{1}[0-9a-bA-B]{1}[0-9]{3}$" id="CodePostal" minlength="5" maxlength="5" placeholder="Code Postal">
                <input type="text" class="form-control" id="Ville" name="Ville" placeholder="Ville">
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
<script src="{{asset('js/autoclompleteAddress.js')}}"></script>
