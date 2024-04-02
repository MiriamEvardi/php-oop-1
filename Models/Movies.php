<?php

// instance variables
class Movie
{
    public $title;
    public $year;
    public $plot;
    public $language;


    // constructor
    function __construct($_title, $_year, $_plot, $_language)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->plot = $_plot;
        $this->language = $_language;
    }


    public function getFullMovie()
    {
        return $this->title . ' ' . $this->year . ', ' . $this->plot . ', ' . $this->language;
    }
}
