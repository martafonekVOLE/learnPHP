<?php
    //Example of array -> Array keys can be named 
    //  or numbered. If not, they are numbered 
    //  automatically (continue the last index)

    //Run in terminal -> "php index.php"

    #First example
    $arr = array(
        "this" => "foo",
    );

    var_dump($arr["this"]);
    
    # Second Example
    $arr = ["foo", "dump", "arr"];
    var_dump($arr);
?>