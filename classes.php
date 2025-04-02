<?php


class Article
{
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = true;
    }

    public function isPublished()
    {
        return $this->published;
    }
}

$article1 = new Article("Article 1", "Content 1");
$article1->publish();
$article2 = new Article("Article 2", "Content 2");
var_dump($article1->isPublished());
var_dump($article2->isPublished());