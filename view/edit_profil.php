<?php
session_start();
require_once('../model/database.php');
require_once('../model/UserEntity.php');
require_once('../controller/editProfilController.php');

$db = Database::getInstance();
$user = $db->getUser($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="../css/edit_profil.css">
    <title>Document</title>
</head>

<body>
<?php
    include_once('include/navbar.php');
?>
    <div id="modif">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="../images/Profil.jpg"><span class="font-weight-bold"><?php echo htmlspecialchars($user->getFirstname() . ' ' . $user->getLastname());  ?></span><span class="text-black-50"><?php echo htmlspecialchars($user->getEmail()); ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Modification profil</h4>
                </div>
                <form method="POST">
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Prénom</label><input type="text" class="form-control" id="firstname" name="firstname" value=""></div>
                        <div class="col-md-6"><label class="labels">Nom</label><input type="text" class="form-control" value="" id="lastname" name="lastname"></div>
                        <div class="col-md-6"><label class="labels">Nom d'affichage</label><input type="text" class="form-control" value="" id="display_name" name="display_name"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mot de passe</label><input type="password" class="form-control" id="password" name="password" value=""></div>
                        <div class="col-md-12"><label class="labels">Téléphone</label><input type="text" class="form-control" id="telephone" name="telephone" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">A propos</label><input type="text" class="form-control" id="about" name="about" value="" placeholder=""></div>
                        <label>
                            <input type="checkbox">
                            <span class="check"></span>
                        </label>
                    </div>
                    <div class="mt-5 text-center"><button type="submit" class="btn btn-primary" id="editBut" name="editBut">Modifier</button></div>
               </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</body>

</html>

<?php

$profilController = new editProfilController();
$profilController->fEditProfil();