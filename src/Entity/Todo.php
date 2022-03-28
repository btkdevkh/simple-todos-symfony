<?php

namespace App\Entity;

class Todo {
  public $id;
  public $text;
  
  public static $todos = [];

  public function __construct($id, $text) {
    $this->id = $id;
    $this->text = $text;

    self::$todos[] = $this;
  }

  public static function createTodo() {
    return self::$todos = [
      new Todo(1, 'Buy milk'),
      new Todo(2, 'Buy egg'),
      new Todo(3, 'Buy bread')
    ];
  }

  public static function getTodo($id) {
    for($i = 0; $i < count(self::$todos); $i++) {
      if(self::$todos[$i]->id === intval($id)) {
        return self::$todos[$i];
      }
    }
  }
}
