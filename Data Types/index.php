<?php

    #Integer - int, integer
    #Bool - bool, boolean
    #Float
    #Double
    #Real
    #String

    #Resources type 
    #   holds information about external resource
    #   can identify objects etc... 
    #   get_resource_type()
    #   converting makes no sence
    #   is freed automatically

    #NULL type
    #   this has no value
    #   variable has NULL when
    #       it has been assigned
    #       no value has been set
    #       value has been unset()

    #Callback / Callables
    #   call_user_func(), usort() accepts user funtions as parameters
    #First example
    function foo(){
        echo ("This is a test.");
    }

    call_user_func("foo");

    #See more https://www.php.net/manual/en/language.types.callable.php

    #Type Casting
    #(int), ...
    #(array), (object), (unset)
?>