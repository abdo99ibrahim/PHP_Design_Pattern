<?php
namespace creational\AbstractFactory2;

class OReillyBookFactory  extends AbstractBookFactory{
    private $context = "OReilly";
    function makePHPBook()
    {
        return new OReillyBookFactory;
    }
    function makeMySQLBook()
    {
        return new OReillyBookFactory;
    }
}
?>