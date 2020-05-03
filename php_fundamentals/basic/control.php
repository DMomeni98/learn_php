<?php
    $int_test = 3;
    $int_test **=5;

    $str_test = "hello";
    $str_test .= " world\n";

    echo $int_test."\n";
    echo $str_test;

    //spaceship operator <=>
    //-1 if first one is smaller
    //0 if equal
    //1 if first one is bigger


    //we can use "and" keyword instead of "&&"
    //we can use "or" keyword instead of "||"

    $swc = 3;
    switch($swc)
    {
        case 0:
            echo "zero\n";
        break;
        case 1:
            echo "one\n";
        break;
        case 2:
            echo "two\n";
        break;
        default:
            echo "three\n";
    break;
    }
    
    //ternary operator
    $test = 5;
    $result = ($test > 10)? "yes" : "no";
    echo $result.PHP_EOL;

    //null coalesce

    $test = '';
    $test1 = null;
    // empty string and null are diffrent.
    //if the first variable is not set use second one if not use third
    $result = $test1 ??  $test ?? "sorry! variable is not set!";
    echo $result.PHP_EOL;


    //we can use a combination of ":" and (endif, endfor, endwhile) keywords instead of {} (curly brackets);