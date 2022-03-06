<?php
require_once('../model/database.php');
require_once('../model/UserEntity.php');


class editProfilController
{
    public function fEditProfil()
    {
        $db = Database::getInstance();

        if(isset($_SESSION['email']))
        {
            $user = $db->getUser($_SESSION['email']);

            if(isset($_POST['editBut']))
            {
                $needUpdate = false;

                if(isset($_POST['firstname']) && !empty($_POST['firstname']))
                {
                    // Todo : length
                    $user->setFirstName($_POST['firstname']);
                    $needUpdate = true;
                }
                if(isset($_POST['lastname']) && !empty($_POST['lastname']))
                {
                    // Todo : length
                    $user->setLastname($_POST['lastname']);
                    $needUpdate = true;
                }
                if(isset($_POST['display_name']) && !empty($_POST['display_name']))
                {
                    // Todo : length
                    $user->setDisplayName($_POST['display_name']);
                    $needUpdate = true;
                }
                if(isset($_POST['telephone']) && !empty($_POST['telephone']))
                {
                    // Todo : length
                    $user->setTelephone($_POST['telephone']);
                    $needUpdate = true;
                }
                if(isset($_POST['about']) && !empty($_POST['about']))
                {
                    // Todo : length
                    $user->setAbout($_POST['about']);
                    $needUpdate = true;
                }

                if(isset($_POST['password']) && !empty($_POST['password']))
                {     
                    if(strlen($_POST['password']) < 8 || strlen($_POST['password']) > 20)
                        return;

                    $user->setPassword($_POST['password']);
                    $needUpdate = true;
                }

                if($needUpdate)
                {
                    $db->update_user($user);      
                    echo '<p class="alert alert-success">Modification effectué</p>';   
                }
            }
        }
    }
}