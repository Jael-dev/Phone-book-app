<?php
// src\Entity\group.php
namespace App\Services;

class group
{
    private $name;
    private $color;

 // todo: Add the other fields 
    
    public function __construct(
        Name $name,
        Color $color,
    )
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function create() {
        // ...
    }

    
}