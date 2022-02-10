<?php
    #First example
    //Class -> prescription for objects
    class foo{
        function do_foo(){
            echo ("#First example\n");
            echo ("doing foo things...\n\n");
        }
    }

    //Assigning new object
    $obj = new foo;

    //Requesting object's function
    $obj->do_foo();

    #Second example
    class bar{
        function mod2($val){
            $val = $val % 2;
            return $val;
        }
    }
    $obj = new bar;
    $givenVal = $obj->mod2(11);
    echo("Second example\n" . "11 % 2 = " . $givenVal);

?>