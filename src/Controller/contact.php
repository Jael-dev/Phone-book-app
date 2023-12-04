<?php
// src\Controller\contact.php
namespace App\Services;

class contact
{
    private $firstname;
    private $lastname;
    private $profile;
    private $number;

 // todo: Add the other fields 
    
    public function __construct(
        Firstname $firstname,
        Lastname $lastname,
        Profile $profile,
        Number $number
    )
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->profile = $profile;
        $this->number = $number;
    }

    public function create() {
        // ...
    }
}