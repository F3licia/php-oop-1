<?php
/* create un file index.php in cui:
- è definita una classe ‘Movie’  v
   => all'interno della classe sono dichiarate delle variabili d'istanza v
   => all'interno della classe è definito un costruttore v
   => all'interno della classe è definito almeno un metodo v
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà*/


    class Movie {
        public $title;
        public $secondTitle;
        public $year;


        function __construct($movieData) {
            $this->title = $movieData["title"];
            $this->year = $movieData["release_date"];
            $this->secondTitle = isset($movieData["original_title"]) ? $movieData["original_title"] : null;

        }

        public function renderCard() {
            echo "<h1>" . $this->title . "</h1>";
       
          }
         
};

$movieList = [

    [
    "adult" => false,
    "backdrop_path" => "/roYyPiQDQKmIKUEhO912693tSja.jpg",
    "genre_ids" => "id:447332",
    "original_language" =>"us",
    "original_title" => "A Quiet Place",
    "overview" => "Una famiglia vive un'esistenza isolata nel silenzio più assoluto, per paura di una minaccia sconosciuta che segue solo il suono e attacca a qualsiasi rumore.",
    "popularity" => "784.093",
    "poster_path" => "/sTwFYSbEJzZfBO0518Jl5Tsit4Z.jpg",
    "release_date" => "2018-04-03",
    "title" => "A Quiet Place - Un posto tranquillo",
    "video"=>"false",
    "vote_average" => "7.4",
    ]
];


foreach($movieList as $movieData){
    $instance = new Movie($movieData);

   $instance -> renderCard();

}





?>