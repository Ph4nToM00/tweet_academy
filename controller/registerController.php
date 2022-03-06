<?php
require_once('../model/database.php');
require_once('../model/UserEntity.php');

class registerController
{
    function register()
    {
        if (
            isset($_POST['firstname']) && !empty($_POST['firstname']) &&
            isset($_POST['lastname']) && !empty($_POST['lastname']) &&
            isset($_POST['display_name']) && !empty($_POST['display_name']) &&
            isset($_POST['username']) && !empty($_POST['username']) &&
            isset($_POST['password']) && !empty($_POST['password']) &&
            isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['telephone']) && !empty($_POST['telephone']) &&
            isset($_POST['city']) && !empty($_POST['city']) &&
            isset($_POST['country']) && !empty($_POST['country']) &&
            isset($_POST['zipcode']) && !empty($_POST['zipcode']) &&
            isset($_POST['birthdate']) && !empty($_POST['birthdate'])
        ) {
            if (!ctype_alpha($_POST['firstname']))
                return;
            if (!ctype_alpha($_POST['lastname']))
                return;
            if (!ctype_alpha($_POST['display_name']))
                return;
            if (!ctype_alpha($_POST['username']))
                return;
            if (!ctype_alpha($_POST['city']))
                return;
            if (!ctype_alpha($_POST['password']))
                return;

            if (strlen($_POST['firstname']) > 47)
                return;
            if (strlen($_POST['lastname']) > 47)
                return;
            if (strlen($_POST['display_name']) > 47)
                return;
            if (strlen($_POST['username']) > 47)
                return;
            if (strlen($_POST['city']) > 47)
                return;

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                return;

            if (strlen($_POST['password']) < 8 && strlen($_POST['password']) > 20)
                return;

            if (!is_numeric($_POST['zipcode']))
                return;
            if (!is_numeric($_POST['telephone']))
                return;

            // country
            // birthdate

            $db = Database::getInstance();

            if ($db->checkEmailExists($_POST['email'])) {
                echo '<p class="alert alert-danger">Email déjà utilisée</p>';
                return;
            }

            $date = date('Y-m-d H:i:s');
            $user = new User(
                $_POST['display_name'],
                $_POST['username'],
                $_POST['email'],
                $_POST['telephone'],
                $_POST['password'],
                $_POST['birthdate'],
                $date,
                $_POST['firstname'],
                $_POST['lastname']
            );
            $db->add_user($user);
            header('location: ../index.php?action=login');
        }
    }
}
