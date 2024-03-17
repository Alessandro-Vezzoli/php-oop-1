<?php

class Movie {
    public $title;
    public $genre = [];
    public $releaseYear;
    public static $counter = 0;
     
    
     
    public function __construct($title, $genres, $releaseYear) {
        $this->title = $title;
        $this->genre = $genres;
        $this->releaseYear = $releaseYear;
        self::$counter++;
    }

    public function displayCounter() {
        echo "Number of movies created: " . self::$counter . "<br>";
    }

   
     public static function displayStaticInfo() {
        echo "This is a static method.<br>";
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

$movie1->displayCounter();

Movie::displayStaticInfo();

$movie1->displayInfo();
$movie2->displayInfo();

?>
