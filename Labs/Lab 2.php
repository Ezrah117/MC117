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
        echo nl2br("Question 1 \r\n");
        echo substr_replace("$string","$replacement",16,0);
        echo "<br>";

        //QUESTION 2
        $fruits = array('orange', 'apple', 'mango', 'banana');
        $fruits = array_map('ucfirst', $fruits);
        sort($fruits);
        echo "<br>";
        echo nl2br("Question 2 \r\n");
        echo nl2br("$fruits[0] \r\n");
        echo nl2br("$fruits[1] \r\n");
        echo nl2br("$fruits[2] \r\n");
        echo nl2br("$fruits[3] \r\n");

        //QUESTION 3
        $sample_string = '230037';
        echo "<br>";
        echo nl2br("Question 3 \r\n");
        echo substr(chunk_split($sample_string, 2, ':'),0,-1)."\n";
        echo "<br>";

        //QUESTION 4
        echo nl2br("<br>");
        $games = array('Halo', 'Hollow Knight', 'God of War', 'Dishonored', 'Borderlands', 'Red Dead Redemption');
        $games_manual_key = array('Halo' => 10, 'Hollow Knight' => 20, 'God of War' => 30, 'Dishonored' => 40, 'Borderlands' => 50, 'Red Dead Redemption' => 60);
        $max_key = max(array_keys($games));
        $max_manual_key = max(array_keys($games_manual_key));
        echo nl2br("Question 4 \r\n");
        echo nl2br("The highest key value in the first array is: ".$max_key, " \r\n");
        echo nl2br(" \r\n");
        echo nl2br("Element with the highest key value in the second array is: ".$max_manual_key, " \r\n");
        ?>