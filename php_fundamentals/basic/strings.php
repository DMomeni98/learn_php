<?php
    //single qutes don't allow formating.
    //two ways to concat variables imidiatly fllowed by characters:
    $var = 2;
    echo "money comes {$var}nd\n";
    echo "money comes ".$var."nd\n";

    //here doc: print just like the format you wirte.
    //pay attention after end of text there should be no spaces followd by ;
    echo <<<EOT
    fl;adf;h;vms;lkajf'sdf;hfhpo
    ;lsdfj;lpgujosdkmv/.xc,vm
    sd;lf;ljgriog[rqm;;gx
                        -;kfgd;klg
    
    EOT;

    //echo and print() are almost the same
    $str  = 'abc';
    $len = 0;
    $str = strtoupper($str);
    $str = strtolower($str);
    $len = strlen($str);

    //search string for a string(case sensetive), 3rd prameter is offset optional
    //in case not found: empty string
    strpos('a;sdh;ag;sjf;sdlhfpodgijsd', $str, 0);

    //replase s1 with s2 when s1 is in S how many changes occured count (refrense type)
    // str_replace(s1, s2, S, count);
    
    //split strings to aaray each sub has the same length len
    //str_split(S, len)
    
    //substr()

    