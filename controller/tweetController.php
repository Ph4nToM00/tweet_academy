<?php

require_once('../model/database.php');
require_once('../model/UserEntity.php');

class tweetController
{
    function postTweet()
    {
        $db = Database::getInstance();
        $user = $db->getUser($_SESSION['email']);

        if(isset($_POST['toTweet']))
        {
            if(strlen($_POST['toTweet']) > 3 && 140 > strlen($_POST['toTweet']))
                $db->addTweet($_POST['toTweet'], $content);
        }
    }
}