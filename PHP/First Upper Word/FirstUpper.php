<?php
function firstUpper($value){
    $n = explode(" ",$value);
    $str = "";
    for ($i=0; $i < count($n); $i++) { 
        $str .= ucfirst(strtolower($n[$i]))." ";
    }
    return trim($str);
}