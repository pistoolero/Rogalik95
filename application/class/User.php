<?php

class User {
    private $id;
    private $username;
    private $email;
    private $created_on;
    private $photo;
    private $bio;
    private $first_name;
    private $last_name;
    private $last_login;

    /**
     * @return mixed
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }
    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCreatedOn()
    {
        return $this->created_on;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}