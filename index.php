<?php

$days = 365;
$cigs_mon_fri = rand (1, 3);
$cigs_sat = rand (1, 4);
$cigs_sun = rand (1, 3);
$pack_price= 3.50;


$count_mon_fri_ttl = 0;
$count_sat_ttl = 0;
$count_sun_ttl = 0;

for ($i = 1; $i <= $days; $i++) {
    var_dump($i);
    $strtotime_param = "+$idays";
    var_dump($strtotime);
    $day_timestamp = strtotime ($strtotime_param);
    var_dump ($day_timstamp);
        
    $weekday = date('N', $day_timestamp);
    var_dump($weekday);
    if ($weekday <= 5) {
    var_dump("tai yra darbo diena");
    $count_mon_fri_ttl += rand(1, 3);
    var_dump("Darbo dienu cizos: $count_mon_fri_ttl");
    }
    elseif ($weekday == 6){
    var_dump("tai yra sestadienis");
    $count_sat_ttl += rand(1, 4);
    }
    else {
    var_dump("tai yra sekmadienis");
    $count_sun_ttl += rand(1, 3);
    }   
    
}  




$price_mon_fri = $count_mon_fri_ttl/20*$pack_price;
$price_sat = $count_sat_ttl/20*$pack_price;
$price_sun = $count_sun_ttl/20*$pack_price;

$h1 = "Cizu skaiciuokle";
$h2 = "Darbo dienu cizos $count_mon_fri_ttl, (kaina: $price_mon_fri)";
$h3 = "Per sestadienius surukytos cizos $count_sat_ttl, (kaina: $price_sat)";
$h4 = "Per sekmadienius surukytos cizos $count_sun_ttl, (kaina: $price_sun)";

?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Islaidos</title>
    </head>

    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h2><?php print $h3; ?></h2>
        <h2><?php print $h4; ?></h2>    
    </body>

</html>
