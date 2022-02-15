<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lab 2</title>
    </head>

    <body>
        <?php
        //QUESTION 1
        $string = 'The quick brown jumps.';
        $replacement = 'fox ';
        echo substr_replace("$string","$replacement",16,0);

        echo "<br>";

        //QUESTION 2
        $fruits = array('orange', 'apple', 'mango', 'banana');
        $fruits = array_map('ucfirst', $fruits);
        sort($fruits);
        echo "<br>";
        echo nl2br("$fruits[0] \r\n");
        echo nl2br("$fruits[1] \r\n");
        echo nl2br("$fruits[2] \r\n");
        echo nl2br("$fruits[3] \r\n");

        //QUESTION 3
        echo "<br>";
        $sample_string = '230037';
        echo substr(chunk_split($sample_string, 2, ':'),0,-1)."\n";
        ?>