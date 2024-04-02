<?php

// instance variables
class Movie
{
    public $title;
    public $trailerUrl;
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
     * @param  string $_trailerUrl
     * @param  int $_year
     * @param  string $_plot
     * @param  string $_language
     * @param  array $_genres
     */

    function __construct($_title, $_trailerUrl, $_year, $_plot, $_language, $_genres)
    {
        $this->title = $_title;
        $this->trailerUrl = $_trailerUrl;
        $this->year = $_year;
        $this->plot = $_plot;
        $this->language = $_language;
        $this->genres = $_genres;
    }


    public function getFullMovie()
    {
        $genresString = implode(', ', $this->genres);
        return '<br> Release: <b>' . $this->year . '</b>, <br> <i>' . $this->plot . '. </i> <br> Original language: <b>' . $this->language . ' </b> <br> Genres: <i>' . $genresString . '</i>';
    }

    public function getTrailerUrl()
    {
        return $this->trailerUrl;
    }
}
