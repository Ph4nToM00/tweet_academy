<?php

require_once('../utilities/functions.php');
require_once('../model/UserEntity.php');

class Database
{
    private static $instance = null;

    private $user = 'root';
    private $pass = 'root';
    private $dbh = NULL;

    function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=tweet_academy', $this->user, $this->pass);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$instance)
            self::$instance = new Database();

        return self::$instance;
    }

    function get_db_handle()
    {
        if ($this->dbh)
            return ($this->dbh);
        else
            return NULL;
    }

    function add_user($user)
    {
        $sth = ($this->dbh)->prepare("INSERT INTO user(display_name, username, email, telephone, password,
        birthdate, inscription_date, firstname, lastname) 
        VALUES (:display_name, :username, :email, :telephone, :password,
        :birthdate, :inscription_date, :firstname, :lastname)");

        $display_name = $user->getDisplay_name();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $telephone = $user->getTelephone();
        $password = hashPassword($user->getPassword());

        $birthdate = $user->getBirthdate();
        $inscription_date = $user->getInscription_date();
        $firstname = $user->getFirstname();
        $lastname = $user->getLastname();
        


        $sth->bindParam(':display_name', $display_name);
        $sth->bindParam(':username', $username);
        $sth->bindParam(':email', $email);
        $sth->bindParam(':telephone', $telephone);
        $sth->bindParam(':password', $password);
        $sth->bindParam(':birthdate', $birthdate);
        $sth->bindParam(':inscription_date', $inscription_date);
        $sth->bindParam(':firstname', $firstname);
        $sth->bindParam(':lastname', $lastname);

        $sth->execute();

    }

    function checkEmailExists($email)
    {
        $rep = ($this->dbh)->prepare("SELECT * FROM user WHERE email = ? LIMIT 1");
        $rep->execute(array($email));

        $row = $rep->fetch(PDO::FETCH_ASSOC);
        if ($row)
            return true;
        else
            return false;
    }

    function getUser($email)
    {
        $rep = ($this->dbh)->prepare("SELECT * FROM user WHERE email = ? LIMIT 1");
        $rep->execute(array($email));

        $row = $rep->fetch(PDO::FETCH_ASSOC);
        $user = new User(   
            $row['display_name'],
            $row['username'],
            $row['email'],
            $row['telephone'],
            $row['password'],
            $row['birthdate'],
            $row['inscription_date'],
            $row['firstname'],
            $row['lastname'],
            $row['about'],
            $row['theme'],
            $row['banner'],
            $row['profile_pic'],
            $row['id']);
        return $user;
    }

    function getTotalTweet($user)
    {
        $rep = ($this->dbh)->prepare("SELECT COUNT(*) as tweets FROM tweet WHERE id_user = ?");
        $rep->execute(array($user->getId()));
        $row = $rep->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    function getTotalFollowers($user)
    {
        $rep = ($this->dbh)->prepare("SELECT COUNT(*) as followers FROM follow where is_followed = ?");
        $rep->execute(array($user->getId()));
        $row = $rep->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    function getTotalFollowing($user)
    {
        $rep = ($this->dbh)->prepare("SELECT COUNT(*) as following FROM follow where is_following = ?");
        $rep->execute(array($user->getId()));
        $row = $rep->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    function getFollowersList($user)
    {
        $rep = ($this->dbh)->prepare("SELECT display_name FROM user INNER JOIN follow ON is_followed = user.id AND is_following = ?");
        $rep->execute(array($user->getId()));
        $row = $rep->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    function getFollowingList($user)
    {
        $rep = ($this->dbh)->prepare("SELECT display_name FROM user INNER JOIN follow ON is_following = user.id AND is_followed = ?");
        $rep->execute(array($user->getId()));
        $row = $rep->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    function update_user($user)
    {  
        $sth = ($this->dbh)->prepare("UPDATE user 
            SET password = :password,
            firstname = :firstname,
            lastname = :lastname,
            display_name = :display_name,
            telephone = :telephone,
            about = :about
            WHERE id = :id LIMIT 1");

        $password = $user->getPassword();
        $firstname = $user->getFirstname();
        $display_name = $user->getDisplay_name();
        $lastname = $user->getLastname();
        $telephone = $user->getTelephone();
        $about = $user->getAbout();
        $id = $user->getId();

        $sth->bindParam(':password', $password);
        $sth->bindParam(':firstname', $firstname);
        $sth->bindParam(':lastname', $lastname);
        $sth->bindParam(':display_name', $display_name);
        $sth->bindParam(':telephone', $telephone);
        $sth->bindParam(':about', $about);
        $sth->bindParam(':id', $id);

        $sth->execute();
    }

    function addTweet($user, $content)
    {
        $sth = ($this->dbh)->prepare("INSERT INTO tweet(creation_date, content, id_user)
        VALUES (:creation_date, :content, :id_user)");

var_dump($user);
        $id = $user->getId();
        $date = date('Y-m-d H:i:s');

        $sth->bindParam(':creation_date', $date);
        $sth->bindParam(':content', $content);
        $sth->bindParam(':id_user', $id);

        $sth->execute();
    }
}
