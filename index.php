<?php

class Movie {
    public $title;
    public $genre = [];
    public $releaseYear;
    
     
    public function __construct($title, $genres, $releaseYear) {
        $this->title = $title;
        $this->genre = $genres;
        $this->releaseYear = $releaseYear;
    }

    
}

?>
