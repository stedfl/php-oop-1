<?php
include __DIR__  . '/Crew.php';
class Movie {
  public $title;
  public $original_title;
  public $genre;
  public $year;
  public $crew;
  public $poster = "https://st4.depositphotos.com/14953852/22772/v/600/depositphotos_227725020-stock-illustration-image-available-icon-flat-vector.jpg";
  public $description;

  /**
   * @param String $title
   * @param String $original_title
   * @param Array $genre
   * @param Number $year
   * @param Crew $crew
   * @param String $poster
   * @param String $description
  */

   public function __construct($_title, $_genre, $_year, Crew $_crew, $_original_title = null)
   {
    $this->title = $_title;
    $this->original_title = $_original_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->crew = $_crew;
   }

   public function set_poster($_poster) {
    $this->poster = $_poster;
   }

   public function set_description() {
    $this->description = "Il film " . $this->original_title . " è stato realizzato nel " . $this->year . ". Si tratta di un film di genere " . $this->get_genres();
   }

   public function get_genres() {
    $genres_list = '';
    $comma = ', ';
    foreach($this->genre as $key => $single_genre) {
      if($key === (count($this->genre) - 1)) {
        $comma = '.';
      }
      $genres_list .= $single_genre . $comma;
    }
    return $genres_list;
   }
}
?>