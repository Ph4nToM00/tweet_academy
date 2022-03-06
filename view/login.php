<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style_login.css">
    <title>twitter Login</title>
</head>
<body>

  <main>


<div id="main_left">

    <div id="bird">
      <a href="../index.php"><img src="../images/twitterA.png" alt="logo oiseau"></a>
    </div>


    <div id="Button_left">
    <form method="POST">
  <div class="form-group">
    <label for="email">Adresse email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Vos coordonnées resteront confidentielles.</small>
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

    <div id="compte"><br>
      <a href="../view/register.php"><small id="emailHelp" class="form-text text-muted">Vous ne possédez pas compte?</small></a>
      </div>
    </div>

</div>

    <div id="main_right">
      <img src="../images/pexels-cottonbro-3585089.jpg" alt="">
    </div>

</main>




</body>
</html>

<?php
require_once('../controller/loginController.php');
$login = new loginController();
$login->login();