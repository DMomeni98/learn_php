<?php

    //create arrays:
    //$arr = array();
    //$arr[] = '';



    //associative arrays:insert if you insert a value without key,
    //php automatically increament the previous integer key, as key for this value
    

    //function:bool array_key_exists(key, array); true or nothing
    //works both for indexed arrays, and accociative arrays

    //check if a value is present in a array
    //if you want to check if the type is equal too set optional to true
    //function:bool in_array(value, array, optional); true or nothing
    
    //print_r(array) prints array in human readable format

    //array_push(array, new_val) used for only indexed arrays and returns array lengh
    // or another way for both arrays
    //$array[] = 'new value';

    $arr = [ 1,2,3,4];


    //without second prameter outputs only the length
    $t = array_push($arr);

    echo $t;


    //remove and returns the last item
    array_pop();

    //remove spesific index(s)
    unset($arr[1], $arr[2]);


    //sort arrays:
    //sort(array) if applied on associative arrays it changes the keys to integer values
    //asort(array) it keeps the keys of associative arrays, but in indexed arrays
    //it changes the order of indexes 
    //ksort(array); sort associative arrays by their key value

    //count(array, optional) returns length of array
    //if optional is set to 1 or COUNT_RECURSIVE it counts the subarrays too.

    //foreach( $array as $item )
    //foreach($assoc_arr as $key => $value)
     
     