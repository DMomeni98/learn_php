<?php
    //you can call a function both before or after declaration.
    //when using global keyword the variable is also available outside the function.
    function test_func($var1, $var2, $var3)
    {
        global $global_var;
        $normal_var = 'normal';
        $global_var = 'global';
        echo "cool\n";
        return $normal_var;
    }


    //variable functions:
    $var = 'test_func';
    $var();
?>