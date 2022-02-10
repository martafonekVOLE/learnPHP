<?php

    #Function construction is similar to C
    function double_val($i){
        return $i*2;
    }
    echo("First Example: \nExpected return: 8\nReturns: ".double_val(4)."\n\n");

    #Assing / Change multiple variables value:
    $b = $a = 5;
    echo("Second Example:\nB: ".$b."\nA: ".$a."\n\n");
    #$a, $b = 5; Cannot be used!

    #Assigning iterrated value
    #To assign iterrated value, use ++$var
    $b = ++$a;
    echo("Third Example: \nB: $b\tA: $a\n");

    #To assing current value and iterrate the old one, use $var++
    $a = 5;
    $c = $a++;
    echo("C: $c\tA: $a\n");

    #To add value to current number, use $var += 10
    $c += 10;
    echo("\nFourth Example: + 10 = $c");
    #Works similarly for other operators
    $c *= 10;
    echo("\t * 10 = $c");

    
?>