<?php
session_start();

require_once('../model/database.php');
require_once('../model/UserEntity.php');
require_once('../utilities/functions.php');

class loginController
{
    public function login()
    {
        $db = Database::getInstance();
        $user = $db->getUser($_POST['email']);
        if (hashPassword($_POST['password']) == $user->getPassword()) {
            $_SESSION['email'] = $_POST['email'];
            header('location: ../index.php?action=home');
        } else {
            echo '<p class="alert alert-danger">Mot de passe éronnée !</p>';
        }
    }
}
