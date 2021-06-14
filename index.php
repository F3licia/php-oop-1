<?php
/* create un file index.php in cui:
- è definita una classe ‘Movie’  
   => all'interno della classe sono dichiarate delle variabili d'istanza 
   => all'interno della classe è definito un costruttore 
   => all'interno della classe è definito almeno un metodo 
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà*/

                       
     //classe 
    class Movie {    
    public $title;
    public $secondTitle;
    public $year;

        //costruttore
        function __construct($movieData) {          
            $this->title = $movieData["title"];
            $this->year = $movieData["release_date"];
                if($movieData["original_title"] != $movieData["title"] ){
                    $this->secondTitle = $movieData["original_title"];               
                };
                if(strlen($movieData["overview"])> 90) {
                    $movieData["overview"] = substr( $movieData["overview"], 0, 90 )."<br>". substr( $movieData["overview"], 91, 180 )."<br>". substr( $movieData["overview"], 181, 360 );
                }; //in realtà non serve, potrebbe tagliare una parola
            $this->overview = isset($movieData["overview"]) ? $movieData["overview"] : null; 
        }

        //metodo
        public function renderCard() {              
            echo "<h2>" . $this->title . "</h2>";
            echo "<h3>" . $this->secondTitle . "</h3>";
            echo "<h5>" . $this->overview . "</h5>";
            echo "<h5>" . $this->year . "</h5>";
       
          }
         
};

$movieList = [
        [
            "adult" => false,
            "backdrop_path" => "/roYyPiQDQKmIKUEhO912693tSja.jpg",
            "genre_ids" => "id:447332",
            "original_language" =>"us",
            "original_title" => "A Quiet Place",
            "overview" => "Una famiglia vive un'esistenza isolata nel silenzio più assoluto, per paura di una
            minaccia sconosciuta che segue solo il suono e attacca a qualsiasi rumore.",
            "popularity" => "784.093",
            "poster_path" => "/sTwFYSbEJzZfBO0518Jl5Tsit4Z.jpg",
            "release_date" => "2018-04-03",
            "title" => "A Quiet Place - Un posto tranquillo",
            "video"=> false,
            "vote_average" => "7.4",
        ],
        [
            "adult" => false,
            "backdrop_path" => "/122WPSRKHjMScqESFYmaYDIYmTL.jpg",
            "genre_ids" => "id:743599",
            "original_language" =>"us",
            "original_title" => "Plan B",
            "overview" => "",
            "popularity" => "14.4",
            "poster_path" => "/fYWWORzYJrs6qXUO4JeRll2zdAZ.jpg",
            "release_date" => "2021-06-18",
            "title" => "Plan B",
            "video"=>false,
            "vote_average" => "5.8",
        ],
        [
            "adult" => false,
            "backdrop_path" => "/vPDtur0rXAnEMqdYAnLO41aSDoO.jpg",
            "genre_ids" => "id:9529",
            "original_language" =>"us",
            "original_title" => "Candyman",
            "overview" => "A due amiche viene la cattiva idea di indagare su una serie di delitti,
            opera di un fantomatico Candyman. Reincarnazione di uno schiavo nero, divorato da un
            tremendo sciame di api, basta nominare il suo nome tre volte per fare una brutta fine.
             Tratto da una storia di Clive Barker, un buon film horror; la musica di Philip Glass,
             insolita per il genere horror, avvolge in maniera inquietante il film.",
            "popularity" => "15.18",
            "poster_path" => "/bwToEOrEfGXr70Zym1lqLUGZntX.jpg",
            "release_date" => "1992-10-16",
            "title" => "Candyman - Terrore dietro lo specchio",
            "video"=> false,
            "vote_average" => "6.5",
        ],
];


foreach($movieList as $movieData){
    $instance = new Movie($movieData);
    //$instance-> renderCard();  //stampa tutto
    $newList[] = $instance;     //per prendere gli elementi singoli, copio l'istanza in un array
}

echo $newList[0]->renderCard();
echo $newList[1]->renderCard();


?>