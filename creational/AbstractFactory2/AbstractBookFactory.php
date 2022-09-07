<?php
namespace creational\AbstractFactory2;
/**
 * BookFactory classes
 */
abstract class AbstractBookFactory{
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}
?>