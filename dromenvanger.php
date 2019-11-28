<?php

$array = array();

echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$vraag = readline() . PHP_EOL;

for ($b = 1; $b <= $vraag; $b++) {
    echo "Wat is jouw naam?" . PHP_EOL;
    $naam = readline();
    echo "Hoeveel dromen ga je opgeven?" . PHP_EOL;
    $dromen = readline() . PHP_EOL; 
    $array[$naam] = array(); 
    for ($c = 1; $c <= $dromen; $c++) {
        echo "Wat is je droom" . PHP_EOL; 
        $droom = readline();
        array_push($array[$naam], $droom);
    }
}
foreach($array as $naam => $value) {
    foreach($value as $Ivalue) {
        echo $naam . " heeft dit als droom: " . $Ivalue . PHP_EOL;   
    }
}