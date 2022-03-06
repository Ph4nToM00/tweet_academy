<?php

require_once('../model/database.php');
require_once('../model/UserEntity.php');

class tweetController
{
    function tweet()
    {
        if(isset($_POST['toTweet']))
        {
            if(strlen($_POST['toTweet']))
            {
                $db = Database::getInstance();
                $user = $db->getUser($_SESSION['email']);
                $db->addTweet($user, $_POST['toTweet']);
            }
        }
    }
}