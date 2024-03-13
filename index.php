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

$movie1 = new Movie("Inception", ["Sci-Fi", "Action"], 2010);
$movie2 = new Movie("The Shawshank Redemption", ["Drama"], 1994);


$movie1->displayInfo();
$movie2->displayInfo();

?>
