<?php

$string = file_get_contents("disclist.json");
$disc_albums = json_decode($string, true);

var_dump($disc_albums);



if( isset( $_GET['discIndex']) && $_GET['discIndex'] !== ''){
    $disc_index = $_GET['discIndex'];

    $singleDisc = $disc_albums[$disc_index];

    $completeColl = $singleDisc;

} else {
    $completeColl = $disc_albums;
};


header('Content-Type: application/json');

echo json_encode( $completeColl );