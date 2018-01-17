<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 1/16/2018
 * Time: 7:59 PM
 */

$animals = array("panda", "alpaca", "boa");
$flavor = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon",
    "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake", "velvet"=>"Red Velvet",
    "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu",);

function sortArray()
{
    global $animals;
    sort($animals);
    $animalLength = count($animals);
    echo "Animals: <br>";
    for($x = 0; $x < $animalLength; $x++) {
        echo $animals[$x];
        echo "<br>";
    }
}

function addedAnimal($newAnimal)
{
    global $animals;
    $animalLength = count($animals);
    for($i=0; $i < $animalLength; $i++) {
        $animals[$i] = strtolower($animals[$i]);
    }
    array_push($animals, $newAnimal);
}