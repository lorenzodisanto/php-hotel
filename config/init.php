<?php

require_once __DIR__ . "/../data/hotels.php";

// recupero variabili dall'input
$filter_parking = isset($_GET["filter-parking"]) ? true : false;
$filter_vote = $_GET["filter-vote"] ?? false;
$filter_distance = isset($_GET["filter-distance"]) ? true : false;

// filtro parcheggio
if($filter_parking)
    $hotels = array_filter($hotels, fn($hotel) => $hotel["parking"]);

// filtro voto
if($filter_vote)
     $hotels = array_filter($hotels, fn($hotel) => $hotel["vote"] >= $filter_vote);

// filtro distanza
if($filter_distance)
    $hotels = array_filter($hotels, fn($hotel) => $hotel["distance_to_center"] <= 10);