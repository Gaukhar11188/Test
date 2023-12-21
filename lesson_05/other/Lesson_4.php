<?php
function typeCheckIntOtArr($a){
    if(gettype($a) != "integer" && gettype($a) != "array")  return false;
    return true;
}

function _sum($a, $b = null){

    if(!typeCheckIntOtArr($a)) return "Wrong Type";

    if($b == null && gettype($a) == "array")
    {
        $sum = 0;
        foreach($a as $n)
        {
            $sum += $n;
        }
        return $sum;
    }
    else{
        if(gettype($b) != "integer") return "Error";
        return $a + $b;
    }
}

function __sum(...$nums)
{
    $sum = 0;
    foreach($nums as $n)
    {
        $sum += $n;
    }
}

function _subs($a, $b){

    if(gettype($a) != "integer" and gettype($b) != "integer") return "Wrong Type";

    else{
        return $a - $b;
    }
}

function _mult($a, $b = null){

    if(!typeCheckIntOtArr($a)) return "Wrong Type";

    if($b == null && gettype($a) == "array")
    {
        foreach($a as $n)
        {
            $res *= $n;
        }
        return $res;
    }
    else{

        if(gettype($b) != "integer") return "Error";
        return $a * $b;
    }
}

function _div($a, $b){

    if(gettype($a) != "integer" and gettype($b) != "integer") return "Wrong Type";

    if($b > 0)
    {
        return $a / $b;
    }
    else{

        return "division over zero!";
    }
}

function _randgen($a, $b)
{
    if(gettype($a) != "integer" and gettype($b) != "integer") return "Wrong Type";
    else{
    $res = rand($a, $b);
    return $res;
    }
}


?>