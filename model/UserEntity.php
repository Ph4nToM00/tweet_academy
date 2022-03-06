<?php

require_once('../utilities/functions.php');

class User
{
    private $id;
    private $display_name;
    private $username;
    private $email;
    private $telephone;
    private $password;
    private $birthdate;
    private $inscription_date;
    private $about;
    private $firstname;
    private $lastname;
    private $theme;
    private $banner;
    private $profile_pic;
    

    function __construct($display_name, $username, $email, $telephone, $password, $birthdate, $inscription_date,
                         $firstname, $lastname, $about = NULL, 
                         $theme = 0, $banner = 0, $profile_pic = 0, $id = 0) 
    {
        $this->id = $id;
        $this->display_name = $display_name;
        $this->username = $username;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->password = $password;
        $this->birthdate = $birthdate;
        $this->inscription_date = $inscription_date;
        $this->about = $about;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->theme = $theme;
        $this->banner = $banner;
        $this->profile_pic = $profile_pic;
    }
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of display_name
     */ 
    public function getDisplay_name()
    {
        return $this->display_name;
    }

    /**
     * Set the value of display_name
     *
     * @return  self
     */ 
    public function setDisplay_name($display_name)
    {
        $this->display_name = $display_name;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = hashPassword($password);
        return $this;
    }

    /**
     * Get the value of birthdate
     */ 
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */ 
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of inscription_date
     */ 
    public function getInscription_date()
    {
        return $this->inscription_date;
    }

    /**
     * Set the value of inscription_date
     *
     * @return  self
     */ 
    public function setInscription_date($inscription_date)
    {
        $this->inscription_date = $inscription_date;

        return $this;
    }

    /**
     * Get the value of about
     */ 
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set the value of about
     *
     * @return  self
     */ 
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of theme
     */ 
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set the value of theme
     *
     * @return  self
     */ 
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get the value of banner
     */ 
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set the value of banner
     *
     * @return  self
     */ 
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get the value of profile_pic
     */ 
    public function getProfile_pic()
    {
        return $this->profile_pic;
    }

    /**
     * Set the value of profile_pic
     *
     * @return  self
     */ 
    public function setProfile_pic($profile_pic)
    {
        $this->profile_pic = $profile_pic;

        return $this;
    }
}