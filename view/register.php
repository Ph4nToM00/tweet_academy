<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style_register.css">
  <title>Twitter Register</title>
</head>

<body>


  <main>
    <div id="main_left">

      <div id="bird">
        <a href="../index.php"><img src="../images/twitterA.png" alt="logo oiseau"></a>
      </div>

      <form method="POST" class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="firstname" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="firstname" name="firstname" minlength="3" maxlength="60" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="lastname" class="form-label">Nom</label>
          <input type="text" class="form-control" id="lastname" name="lastname" minlength="3" maxlength="60" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="lastname" class="form-label">Nom d'affichage</label>
          <input type="text" class="form-control" id="display_name" name="display_name" minlength="3" maxlength="20" required>
          <div class="valid-feedback">
            Looks good!
          </div>

        </div>
        <div class="col-md-4">
          <label for="username" class="form-label">Utilisateur</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="inputGroupPrepend"  minlength="3" maxlength="20" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-4">
          <label for="telephone" class="form-label">Téléphone</label>
          <input type="text" class="form-control" id="telephone" name="telephone" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

    </div>
    <div class="col-md-6">
      <label for="password" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="password" name="password" minlenght="8" maxlength="20" required>
      <div class="valid-feedback">
        Looks good!
      </div>

      <div class="form-group col-md-6">
        <label for="birthdate">Date de naissance</label>
        <input type="date" class="form-control" id="birthdate" name="birthdate" required="required" min="1900-12-01">
      </div>

      <div class="col-md-6">
        <label for="city" class="form-label">Ville</label>
        <input type="text" class="form-control" id="city" name="city" required>
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-3">
        <label for="country" class="form-label">Pays</label>
        <select class="form-select" id="country" name="country" required>
          <option selected disabled value="">...</option>
          <option>Allemagne</option>
          <option>Angleterre</option>
          <option>Autriche</option>
          <option>Belgique</option>
          <option>Espagne</option>
          <option>France</option>
          <option>Italie</option>
          <option>Pays-Bas</option>
          <option>Portugal</option>
          <option>Suisse</option>

        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
      <div class="col-md-3">
        <label for="zipcode" class="form-label">Postal</label>
        <input type="text" class="form-control" id="zipcode" name="zipcode" required>
        <div class="invalid-feedback">
          Please provide a valid zip.
        </div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            J'accepte les termes et conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">S'inscrire</button>
      </div>
      </form>

      <div id="Button_left">
        <div id="compte"><br>
          <a href="../view/login.php"><small id="emailHelp" class="form-text text-muted">Vous possédez un
              compte?</small></a>
        </div>
      </div>

    </div>



  </main>

</body>

</html>

<?php
require_once('../controller/registerController.php');

$registerController = new registerController();
$registerController->register();
?>