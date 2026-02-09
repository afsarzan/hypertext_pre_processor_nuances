<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <h1>
        PHP Basics
    </h1>
    <?php


    echo "<h2>Books:</h2>";
    echo "<ul>";
    foreach ($books as $book) {
        echo "<li>$book</li>";
    }
    echo "</ul>";
    ?>
    <h2>Short hand syntax</h2>
    <ul>
        <?php foreach ($books as $book): ?>
            <li> <?= $book ?> </li>
        <?php endforeach; ?>
    </ul>

    <h2>PHP associative arrays</h2>
    <?php
    $developer = [
        "name" => "Afsar",
        "age" => 30,
        "skills" => ["PHP", "JavaScript", "Python"]
    ];

    ?>
    <p>Name: <?= $developer["name"] ?></p>
    <p>Age: <?= $developer["age"] ?></p>
    <p>Skills:</p>
    <ul>
        <?php foreach ($developer["skills"] as $skill): ?>
            <li> <?= $skill ?> </li>
        <?php endforeach; ?>
    </ul>
    <!-- list of apples  -->

    <ul>
        <?php

        foreach ($filtered_apples as $apple) {

            // if( is_apple_sweet($apple)) {
            echo "<li>Color: {$apple['color']}, Taste: {$apple['taste']}</li>";
            // }
        }
        ?>
    </ul>
</body>

</html>