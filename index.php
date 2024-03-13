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

     public function displayInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Genres: " . implode(", ", $this->genre) . "<br>";
        echo "Release Year: " . $this->releaseYear . "<br>";
        echo "<br>";
    }
}


?>
