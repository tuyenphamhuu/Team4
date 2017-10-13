<?php
// Cat chuoi 
function the_excerpt($text, $string = 180) {
    //$sanitized = htmlentities($text, ENT_COMPAT, 'UTF-8');
$sanitized =strip_tags($text);
    if(strlen($sanitized) > $string) {
        $cutString = substr($sanitized,0,$string);
        $words = substr($sanitized, 0, strrpos($cutString, '.'));
        return $words;
    } else {
        return $text;
    }
   
}