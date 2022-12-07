<?php
class Movie {
  public $title;
  public $original_title;
  public $genre;
  public $year;
  public $poster = "https://st4.depositphotos.com/14953852/22772/v/600/depositphotos_227725020-stock-illustration-image-available-icon-flat-vector.jpg";
  public $description;

  /**
   * @param String $title
   * @param String $original_title
   * @param Array $genre
   * @param Number $year
   * @param String $poster
   * @param String $description
   */

   public function __construct($_title, $_genre, $_year, $_original_title = null)
   {
    $this->title = $_title;
    $this->original_title = $_original_title;
    $this->genre = $_genre;
    $this->year = $_year;
   }

   public function set_Poster($_poster) {
    $this->poster = $_poster;
   }

   public function set_Description() {
    $this->description = "Il film " . $this->original_title . " è stato realizzato nel " . $this->year . ". Si tratta di un film di genere " . $this->get_Genres();
   }

   public function get_Genres() {
    $genresList = '';
    $comma = ', ';
    foreach($this->genre as $key => $single_genre) {
      if($key === (count($this->genre) - 1)) {
        $comma = '.';
      }
      $genresList .= $single_genre . $comma;
    }
    return $genresList;
   }
}

$movie_1 = new Movie("La Leggenda del pianista sull'oceano", ["drammatico", "musicale", "sentimentale"], 1998, "The Legend of 900" );
$movie_1->set_Poster("https://m.media-amazon.com/images/I/71aWiw3TB-L._AC_SL1200_.jpg");
$movie_1->set_Description();

$movie_2 = new Movie("Moulin Rouge", ["drammatico", "musicale"], 2001);
$movie_2->set_Poster("https://guidatv.sky.it/uuid/9a244376-d700-461a-be95-9fefdcecb303/cover?md5ChecksumParam=ae779f31a869c5435816fdab4c03890d");
$movie_2->set_Description();

$movie_3 = new Movie("Erin Brockovich - Forte come la verità", ["biografico"], 2000, "Erin Brockovich");

var_dump($movie_1);
var_dump($movie_2);
var_dump($movie_3);

?>