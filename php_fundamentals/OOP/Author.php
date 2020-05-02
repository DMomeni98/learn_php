<?php

class Author extends Person
    {
        static $genre = 'Classic';

        static function getStatics()
        {
            //access static property inside class(using self keyword), and $
            //access static property of inherited class use porent keyword
            return self::$genre." ".parent::$country;
        }

    }