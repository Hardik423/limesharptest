<?php

function reformat($string){
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $myString = str_replace($vowels, "", $string);
    $myString = ucfirst(strtolower($myString));
    return print_r($myString);
}
//please enter your input here below
reformat("liMeSHArp DeveLoper TEST");

?>