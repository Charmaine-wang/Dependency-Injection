<?php declare(strict_type=1);

class Post{

protected $title;

public function __construct(Author $title){
  $this->title = $title;
}

  public function getPost(): string{

  }
}
