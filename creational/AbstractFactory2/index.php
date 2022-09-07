<?php
namespace creational\AbstractFactory2;
// use creational\AbstractFactory2\OReillyBookFactory;
// use creational\AbstractFactory2\SamsBookFactory;
include 'OReillyBookFactory.php';
include 'SamsBookFactory.php';
writeln('BEGIN TESTING ABSTRACT FACTORY PATTERN');
  writeln('');

  writeln('testing OReillyBookFactory');

   $bookFactoryInstance = new OReillyBookFactory;
   testConcreteFactory($bookFactoryInstance);
  writeln('');

  writeln('testing SamsBookFactory');
   $bookFactoryInstance = new SamsBookFactory;
   testConcreteFactory($bookFactoryInstance);

  writeln("END TESTING ABSTRACT FACTORY PATTERN");
  writeln('');

  function testConcreteFactory($bookFactoryInstance)
  {

      $phpBookOne = $bookFactoryInstance->makePHPBook();
      writeln('first php Author: '.$phpBookOne->getAuthor());
      writeln('first php Title: '.$phpBookOne->getTitle());

      $phpBookTwo = $bookFactoryInstance->makePHPBook();
      writeln('second php Author: '.$phpBookTwo->getAuthor());
      writeln('second php Title: '.$phpBookTwo->getTitle());

      $mySqlBook = $bookFactoryInstance->makeMySQLBook();
      writeln('MySQL Author: '.$mySqlBook->getAuthor());
      writeln('MySQL Title: '.$mySqlBook->getTitle());
  }

  function writeln($line_in) {
    echo $line_in."<br/>";
  }
?>