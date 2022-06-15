<?php

use Carbon\Carbon;

function generateFileName($getName){

    $year = Carbon::now()->year;

    $month = Carbon::now()->month;

    $day = Carbon::now()->day;

    $second = Carbon::now()->second;

    $microsecond = Carbon::now()->microsecond;


return $year . '_' . $month . '_' . $day . '_' . $second . '_' . $microsecond . '_' . $getName;


}
