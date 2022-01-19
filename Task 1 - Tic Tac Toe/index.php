<?php

require_once ('Classes/Main.php');

$coordinates = [
    ['','O','X'],
    ['','O','X'],
    ['','O','']
];

function getData($coordinates){

    $game = new Main($coordinates);

    return $game->winner();
}

echo getData($coordinates);