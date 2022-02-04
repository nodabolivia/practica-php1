<?php

$time_original= '11:05:01 PM';


$firstSplite = explode(' ',$time_original);
# ['11:05:01', 'PM']

$secondSplite = explode(':', $firstSplite[0]);
# ['11', '05', '01']


$var_time = $firstSplite[1]; //AM PM
$var_hours = $secondSplite[0];
$var_minutes = $secondSplite[1];
$var_seconds = $secondSplite[2];

if( $var_time == 'AM' && $var_hours==='12'){
 $hours = '00';
}

if( $var_time === 'PM' && $var_hours < '12'){
    $var_hours = strval(+$var_hours + 12);
}

$output = "{$var_hours}:{$var_minutes}:{$var_seconds}";

echo "{$output} \n";



