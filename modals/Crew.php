<?php
class Crew {
  public $cast;
  public $director;
  public $production;
  public $distribution;

  /**
   * @param Array $cast;
   * @param String $director;
   * @param String $production;
   * @param String $distribution;
  */

  public function __construct($_cast, $_director, $_production = null, $_distribution = null )
  {
    $this->cast = $_cast;
    $this->director = $_director;
    $this->production = $_production;
    $this->distribution = $_distribution;
  }

  public function get_cast_list() {
    $cast_list = '';
    $comma = ', ';
    foreach($this->cast as $key => $single_cast) {
      if($key === (count($this->cast) - 1)) {
        $comma = '.';
      }
      $cast_list .= $single_cast . $comma;
    }
    return $cast_list;
  }
}
?>
