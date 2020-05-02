<?php

    class Person
    {

        const AVG_LIFE_SPAN = 70;
        static $country = "Iran";
        public $firstName ;
        public $lastName ;
        public $yearBorn;

        function __construct($temp_f="", $temp_l="", $temp_y="")
        {
            $this->firstName = $temp_f;
            $this->lastName = $temp_l;
            $this->yearBorn = $temp_y;
        }

        //by default methods are public
        public function getFullName()
        {
            //accessing object properties $ is not needed
            return $this->firstName." ".$this->lastName.PHP_EOL;
        } 
    }