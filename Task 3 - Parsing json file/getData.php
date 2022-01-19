<?php

require_once('Classes/Parser.php');

function getData(){

    $ourData = file_get_contents('data.json');

    $parser = new Parser($ourData);

    return $parser->parser();
}