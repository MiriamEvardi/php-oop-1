<?php

class Director
{
    public $name;
    public $surname;
    public $nationality;

    function __construct($_name, $_surname, $_nationality)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->nationality = $_nationality;
    }

    public function getDirector()
    {
        return ' <br> Directed by: ' . $this->name . ' ' . $this->surname . ' <br> Director nationality: ' . $this->nationality;
    }
}
