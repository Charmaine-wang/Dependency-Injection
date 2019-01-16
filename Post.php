<?php declare(strict_types=1);

class Post{

protected $title;

public function __construct(string $title, Author $author)
{
  $this->title = $title;
}

  // public function getTitle(Author $author): void
  // {
  //   $this->title->add($author);
  // }


public function getTitle(): string
{
    return $this->title;
}
}
