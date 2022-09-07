<?php
namespace creational\AbstractFactory2;

class SamsBookFactory  extends AbstractBookFactory{
    private $context = "Sams";
    public function makePHPBook()
    {
        return new SamsBookFactory;
    }
    public function makeMySQLBook()
    {
        return new SamsBookFactory;
    }
}
?>