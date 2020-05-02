<?php

    //require and require_once if the file doesn't exist it throws a error
    //include and include_once if the file doesn't exist it continues execution
    //include_once can be used also
    include 'Person.php';
    include 'Author.php';

    //constants in classe:
    // echo Person::$AVG_LIFE_SPAN;
    // echo $newObj::$AVG_LIFE_SPAN;
    
    // $newPerson = new Person("Ali", "Hosseini", "98");
    // echo $newPerson->getFullName();

    $newAuthor = new Author("Ali", "Hossini", "20");

    echo $newAuthor->getFullName();
    //access static property outside class:
    // echo Author::$genre;
    // echo Author::getStatics();
    