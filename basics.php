<?php

$greeting = "Hello";
echo "$greeting Afsar!";

$books = ["Book 1", "Book 2", "Book 3"];
$apples = [
    ["color" => "red", "taste" => "sweet"],
    ["color" => "green", "taste" => "sour"],
    ["color" => "yellow", "taste" => "sweet"]
];
$filtered_apples = array_filter($apples, function ($apple) {
    return $apple["color"] === "red";
});

require "basics.view.php";