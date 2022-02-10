<?php

    #We can use some similar constructions as in C:
        #for, while, do - while
        #if, elseif, else
        #break, continue
        #switch
        #return
        #goto
    
    #Appart from those, we can use some new constructions or slightely modified ones

    #Foreach
    $arr = array(1, 2, 3, 4, 5);

    echo("First Example:\n");
    foreach ($arr as $value){
        echo "Looping over ".$value.". element!\n";
    }
    
    #More complicated foreach - we can use key, value and name
    $barr = array(
        "one" => 1,
        "two" => 2,
        "three" => 3,
        "four" => 4,
        "five" => 5
    );
    echo("\nSecond Example: \n");
    foreach($barr as $key => $value){
        echo("\$barr[$key] => $value.\n");
    }

    #Include
    #We can include external files and variable
    echo("\nThird Example: \n");

    echo("My favourite fruit is $color $fruit\n"); #Throws warning Undefined variable
    include 'fruit.php';
    echo("My favourite fruit is $color $fruit\n\n");

    #We can use include in functions, but variables from included file won't be accessible
    #outside of this local scope. We can acheav that by redeclaring variable as global.

    echo("\nFourth Example:\n");

    function favouriteVegetables(){
        global $vegetable;
        include 'vegetables.php';
        echo("My favourite vegetable is $size $vegetable. \n");
    }

    favouriteVegetables();
    echo("I am trying to access my favourite vegetables:$size $vegetable"); #Throws warning - Undefined variable, 
                                                                            #but we can access $vegetable variable. 


    #Functions
    echo("\n\nFifth Example:\nCalling foo() then bar():\n");
    #All functions and classes in PHP have global scope
    function foo(){
        function bar(){
            echo("This is a bar()!\n");
        }
        echo("This is a foo()!\n");
    }

    foo();
    bar();

    #Recursive Functions
    function factorial($n){
        if($n < 2) return 1;
        else{
            return $n * factorial($n-1);
        }
    }
    echo("\nSixth Example: \n");
    echo("Factorial(5) = " .factorial(5) . "\n\n");

    #Anonymous functions

    $sayHi = function($name){
        printf("Hello %s\r\n", $name);
    };
    $sayHi('World');
    $sayHello = $sayHi;
    $sayHello('Anonymous');


    #declare,
    #require,
    #require_once,
    #include_once,
?>