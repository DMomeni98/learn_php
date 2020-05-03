<?php
    $reg_int = 1234;

    //starts with 0
    $oct_num = 01234;

    //starts with 0x
    $hex_num = 0xabc;

    //starts with 0b
    $bin_num = 0b1000;

    // var_dump($reg_int);
    // var_dump($oct_num);
    // var_dump($hex_num);
    // var_dump($bin_num);
?>

<?php
    $float_num1 = 3.14;

    //starting 0 can be omitted
    $float_num2 = .14;

    $sceintific = 31415e-4;

    // var_dump($float_num1);
    // var_dump($float_num2);
    // var_dump($sceintific);
?>

<?php
    $boo1 = false;

    $zero_num = 0;
    $non_zero = 123;
    $null_str = '';
    $has_value = 'I am a string';

    var_dump($boo1);
    var_dump((bool)$zero_num);
    var_dump((bool)$non_zero);
    var_dump((bool)$null_str);
    var_dump((bool)$has_value);

?>

<?php
    //constants are global, though they are accessable everywhere.
    define (NEW_CONSTANT, 'I am a constant');
    echo NEW_CONSTANT;
?>

<?php
    $int_var = 12;
    $str_var = 'string';
    $bool_var = true;
    //outputs 1 if is int, nothing if isn't int.
    is_int($int_var);
    is_int($str_var);
    is_string($int_var);
    is_string($str_var);
    is_bool($bool_var);
    is_bool($int_var);

    define(CONSTANT, 'SET');

    defined(CONSTANT);

    gettype($str_var);
?>