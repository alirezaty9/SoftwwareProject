<?php

function convert($getDate){

    if($getDate == null){return null;}

    $pattern = "/[-\s]/";
    $split = preg_split($pattern , $getDate);

    $convert = verta()->getGregorian($split[0] , $split[1] , $split[2]);

    return implode('-' , $convert) . " " . $split[3];


}
