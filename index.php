<?php

    class Movie {


        public $title;
        public $year;
        private $genre;
        public $description;
        public $director;
        public $cast;

        public function __construct()
        {
            $this->description = 'UNKNOWN';
            $this->director = 'UNKNOWN';
            
        }

        public function getGenre ()
        {

            return $this->genre;

        }
     

        public function setGenre ($genre)
        {

            if(is_string($genre)) {
                $this->genre = $genre;
            }

        }

    }

    $movie1 = new Movie();
    $movie1->title = 'Poor Things';
    $movie1->setGenre('Comedy/Drama');


    var_dump($movie1);
    var_dump($movie1->getGenre());


    $movie2 = new Movie();
    $movie2->title = 'Dune';
    $movie2->setGenre('Sci-fi');


    var_dump($movie2);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <header>
            header
        </header>

        <main>
            main
        </main>

        <footer>
            footer
        </footer>
        
    </body>

</html>