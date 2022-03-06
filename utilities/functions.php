<?php


function hashPassword($password)
{
    $toHash = "vive le projet tweet_academy" . $password;
    return hash('ripemd160', $toHash);
}
