<?php

    // function myFunction(){
    //     $GLOBALS["x"]=100;
    // }

function test(){
    
        $foo="Local var";
        echo '$foo in global scope: '.$GLOBALS["foo"]."\n";
        echo '$foo in current scope: '.$foo."\n";
    }


$foo="Example content";
test();
?>