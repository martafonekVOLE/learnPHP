<?php

    #Variables in PHP start with '$' sign
    #They cannot start with numbers ($123 is invalid)

    #First Example

    $var = 12;
    echo("First example: ". $var ."\n");

    #Apply recast

    echo("First recast: ". (bool)$var ."\n\n");

    #Variables can be in different scopes
    #Global scope:
    $glob_a = 1;
    $glob_b = 2;

    function Sum(){
        global $glob_a, $glob_b;
        return($glob_a + $glob_b);
    }

    $retval = Sum();
    echo("Second Example: ". $retval ."\n");

    #Local scope:
    function Test(){
        #echo($glob_a); #returns warning - undefined variable 
    }

    Test();

    #Static scope:
    #Untill is recursively called, it changes, then it resets
    #Can be used for numbers only
    function staticScope(){
        static $count = 0;
        $count++;
        echo($count);
        if($count < 10){
            echo(", ");
            staticScope();
        }
        $count--;
    }
    echo("\nThird Example: ");
    staticScope();

    #Variable scope:
    $var = 'hello';
    $$var = 'world';

    echo("\n\nFourth Example: ");
    echo("\n$var ${$var}");
    echo("\n$var $hello");

    #=================================================

    #Constants in PHP do not have any '$' sign
    #They can be defined over define() function,
    #or similarly to example bellow.

    #First option - define()
    define("exampleConstant", "This is constant value.");
    echo("\n\nFifth Example:\n".exampleConstant);

    #Second option - const
    const constant = "This is another constant value.";
    echo("\n".constant);

    #Note! Constants cannot be overwrite after they are set.
    #const constant = "overwrite."; #Throws an error - Constant already defined!
    #constant = "overwrite"; #Throws parse error

?>