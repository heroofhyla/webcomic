<?php

class Comic{
 
  public $ids;
  function __construct(){
    $this->ids = $this->sorted_ids();
    $this->first = $this->ids[0];
    $this->latest = end($this->ids);
  }

  public function img_url($id){
    return "img/page$id.png";
  }

  private static function id_sort_callback($a,$b){
    $ai = intval($a);
    $bi = intval($b);

    if ($ai == $bi){
      return 0;
    }

    if ($ai < $bi){
      return -1;
    }

    return 1;
  }

  private function sorted_ids(){
    $all_pages = scandir(__DIR__ . '/../../public/img/');
    $all_ids = [];
    foreach ($all_pages as $page){
      if (substr($page, 0, 1) == '.'){
        continue;
      }
      $all_ids[]= preg_replace('/[^0-9]/', '', $page);

    }
    usort($all_ids, ['Comic', 'id_sort_callback']);
    return $all_ids;
  }

  public function is_latest($id){
    return end($this->ids) == $id;
  }

  public function is_first($id){
    return $this->ids[0] == $id;
  }

  public function prev_id($id){
    $all_ids = self::sorted_ids();
    $this_index = array_search($id, $all_ids);
    return $all_ids[$this_index - 1];
  }

  public function next_id($id){
    $all_ids = self::sorted_ids();
    $this_index = array_search($id, $all_ids);
    return $all_ids[$this_index + 1];
  }

}

