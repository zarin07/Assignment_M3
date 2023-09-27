<?php
$text = "The quick brown fox jumps over the lazy dog.";
function sentence($text){
    $lowerCase = strtolower($text);
   $replace =str_replace("brown", "red", $lowerCase);
     
    print_r($replace);
}
sentence($text);
