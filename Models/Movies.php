<?php

// instance variables
class Movie
{
    public $title;
    public $year;
    public $plot;
    public $language;
    public $genres = array();
    public $director;


    // constructor    
    /**
     * __construct
     *
     * @param  string $_title
     * @param  int $_year
     * @param  string $_plot
     * @param  string $_language
     * @param  array $_genres
     */

    function __construct($_title, $_year, $_plot, $_language, $_genres)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->plot = $_plot;
        $this->language = $_language;
        $this->genres = $_genres;
    }


    public function getFullMovie()
    {
        $genresString = implode(', ', $this->genres);
        return '<b>' . $this->title . '</b>' . ' <br> Release: ' . $this->year . ', <br> ' . $this->plot . '. <br> Original language: ' . $this->language . '. <br> Genres: ' . $genresString;
    }
}
