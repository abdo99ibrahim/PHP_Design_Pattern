<?php
namespace creational\AbstractFactory2;

class SamsMySQLBook  extends AbstractMySQLBook{
    private $author;
    private $title;
    function __construct()
    {
        $this->author = "Paul Dubois";
        $this->title = "ySQL, 3rd Edition";
    }
    function getAuthor(){
        return $this->author;
    }
    function getTitle()
    {
        return $this->title;
    }
    
}
?>