<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lab 2</title>
    </head>

    <body>
        <?php
        //QUESTION 1
        $word = array('fox', 'jump', 'quick', 'brown', 'lazy', 'dog');
        echo "<br>";
        echo nl2br("Question 1 \r\n");
        echo "The ".$word[2]. " ".$word[3]." ".$word[0]." ".$word[1]."s "."over the ".$word[4]." ".$word[5]; 
        echo "<br>";

        //QUESTION 2
        $arr = range(10, 50, 10);
        echo "<br>";
        echo nl2br("Quesion 2 \r\n");
        print_r($arr);
        echo"<br>";
        unset($arr[3]);
        $arr = array_values($arr);
        print_r($arr);
        echo "<br>";

        //QUESTION 3
        $arr = array("Sophia" => "10", "Jacob" => "21", "William" => "29", "Alex" => "43");
        echo "<br>";
        echo nl2br("Question 3 \r\n");
        asort($arr);
        print_r($arr);
        echo "<br>";
        ksort($arr);
        print_r($arr);
        echo "<br>";
        arsort($arr);
        print_r($arr);
        echo "<br>";
        krsort($arr);
        print_r($arr);
        echo "<br>";

        //Question 4
        $color = array(
        "color" => array ("a" => "Red", "b" => "Green", "c" => "White"),
        "numbers" => array(1, 2, 3, 4, 5, 6),
        "holes" => array("First", 5=> "Second", "Third"));
        echo "<br>";
        echo nl2br("Question 4 \r\n");
        echo $color["color"]["c"];
        echo"<br>";
        echo $color["holes"][0];
        echo "<br>";
        echo $color["numbers"][4];
        ?>
    </body>
</html>