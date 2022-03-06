<?php

class disconnectController
{
    function logout()
    {
        session_start();
        if(isset($_SESSION))
        {
            $_SESSION = array();
            session_destroy();
            header('location: ../index.php?action=login');
        }        
    }
}
