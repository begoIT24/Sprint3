<?php
include_once('Tigger.php');

$tigger1 = Tigger::getInstance();
$tigger2 = Tigger::getInstance();
//var_dump($tigger1);
//var_dump($tigger2); Només es crea 1 objecte: Tigger#1

for ($i = 0; $i < 5; $i++){
    $tigger1 -> roar();
}

echo 'El Tigger ha rugit ' . $tigger1 -> getCounter() . ' cops' . PHP_EOL;

?>