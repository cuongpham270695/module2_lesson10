<?php
$check = "s * (s – a) * (s – b) * (s – c)";

function checkBracket($string)
{
    $listBracket = new SplStack();
    $checkBracket = str_split($string);
    $left = "(";
    $right = ")";
    foreach ($checkBracket as $value) {
        if ($left == $value) {
            $listBracket->push($value);
        } else if ($right == $value) {
            if ($listBracket->isEmpty()) {
                return false;
            } else {
                $listBracket->pop();
            }
        }
    }
    if ($listBracket->isEmpty()) {
        return true;
    } else {
        return false;
    }
}

var_dump(checkBracket($check));