<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Basic PHP Page</title>
    </head>

    <body>
        <p>This is standard HTML</p>
        <?php

        //assign your first variable!
        /*$name = 'Wesley';
        echo($name);
        echo " ";
        echo 'This was generated using php!';

        print nl2br(" \n");
        //nl2br used to make new lines
        print nl2br("Hello World \n\r"); //use double quotes when you use newline
    
        print nl2br("This is print! \n");
        print nl2br("This is print again! \n");
    
        //print return value example
        $value = print nl2br("This is a print return value example! \n\r");
    
        print nl2br("This is
        a multiple
        line print \n\r");
    
        //can add new lines in one line of code between two statements
        print nl2br("Hello World \n This is print! \n This is print again");
        echo " ";
        print("Sincerely,\n");
        print nl2br("-S117");
        */

        echo nl2br("This is a simple string in double quotes and contains a break using the nl2br() function \n\r");

        echo 'This will not expand: \n a new line.';
        //Output: This will not expand: \n a new line

        echo('This is a simple string enclosed with single quotes.');

        echo "<br /n";
        //you can also use the break tag to create a newline.

        echo '"I \'ll be back"';
        //Output: "I'll be back"

        $str = <<<IDENTIFIER
        place a string here
        it can span multiple lines /n
        and include single quote ' and double quotes "
        IDENTIFIER;
        echo $str;
        //Heredoc syntax - to define a single, double quote or variables.
        //Nowdoc syntax - similar to heredoc but does not expand the variables.
        //Identifier must be wrapped in single quotes.
        //Makes string easier to read.
        //Used to generate HTML dynamically.
        //Example:

        $title = 'My site';

        //Nowdoc syntax - <<<'HEADER'
        $header = <<<HEADER
        <header>
            <h1>$title</h1>
        </header>
        HEADER;

        echo $header;

        //SIMPLE AND COMPLEX SYNTAX
        $juice = "apple";
        echo "He drank some $juice juice.";
        //Output: He drank some apple juice.

        echo "He drank some juice made of ${juice}s.";
        // Output: He drank some juice made of apples.

        //STRING CONCANTENATION
        //Concatenation operator (' . ')
        //Concatenating assignment operator (' .= ‘)
        $a = "Hello ";
        $b = $a . "World!";
        echo $b;
        // Output: Hello World! 
        //$b = $a concatenated with the string World

        $a = "Hello ";
        $a .= "World!";
        echo $a;
        // Output: Hello World!

        $s1 = 'Hello';
        $s2 = 'World!';
        $greeting = $s1 . $s2;
        echo $greeting;
        //Output: Hello World!

        //STRING FUNCTIONS
        $num = strlen('some string');
        //length of string = 11
        $str = "Mary Had A Little Lamb and She LOVED It So";
        $str = strtolower($str);
        echo $str;
        //Prints: mary had a little lamb and she loved it so.
        //strtolower()
        //strtoupper() - changes string to upper case
        //ucfirst() - changes first letter to capital
        //ucwords() - changes first char of every word and makes it capital
        //substr() - returns the portion of the string specified by offset and length params
        //strpos() - finds the position(index) of the first occurance of a substring in a string
        //str_replace() - replaces some characters with other characters in a string: str_replace: (
            /*
            find = specifies the value to find
            replace = specifies the value to replace the value in find
            string = specifies string to be searched
            count = a variable that counts the number of replacements
            )
            */
        //substr_replace() - replaces a part of a string with another string: substr_replace: (
            /*
            string = specifies the string to check
            replacement = specifies the string to insert
            start = where to start replacing in the string
            length = (optional) specifies how many characters should be replaced
            )
            */
        //similar_text() - calculates the percentage of similarity between two strings: similar_text (
            /*
            string $first
            string $second 
            [, float &$percent]
            )
            */
        //explode() - breaks a string into an array of different strings: array = explode(
            /*
            separator - specifies where to break the string. (required)
            string - the string to split (required)
            limit - specifies the number of array elements to return (optional)
            )
            */
        $var = 'something';
        echo substr($var, 1); //omething
        echo "<br/>";
        echo substr($var, 1, 3); //ome
        echo "<br/>";
        echo substr($var, 4); //thing
        echo "<br/>";
        echo substr($var, -3); //ing
        echo "<br/>";
        echo substr($var, 10); //Returns FALSE

        echo strpos("I love php, I love php too!","php");
        //Output: 7

        echo str_replace("world","Peter","Hello world!");
        //Output: Hello Peter!
        $arr = array("blue","red","green","yellow");
        print_r(str_replace("red","pink","$arr","$i"));
        echo "Replacements: $i";
        //Output: Array ( [0] => blue [1] => pink [2] => green [3] => yellow ) Replacements: 1
        echo substr_replace("Hello world","earth",6);
        //Output: Hello earth

        $sentence = 'The 14th is Valentines Day';
        $string = 'Feb';
        $position = '09'; //insert Feb in to position 9
        echo substr_replace($sentence,$string,$position);
        // Output: The 14th Feb is Valentines Day

        $mystring = 'abcdefabcdef';
        $findme = 'a';
        $pos = strpos($mystring, $findme); // $pos = 0
        echo $pos;
        $pos = strpos($mystring, $findme, 1); // $pos = 6
        echo $pos;
        $pos = strpos($mystring, $findme, 8); // $pos = FALSE
        echo $pos;
        //Output: 06

        //Accessing single characters in a string
        $string = 'abcdef';
        echo $string[0]; //a
        echo "<br/>";
        echo $string[3]; //d
        //Output: a
        //        b

        $str1 = 'PHP IS GREAT';
        $str2 = 'WITH MYSQL';
        similar_text($str1, $str2, $percent);
        echo $percent;
        //Output: 27.27

        similar_text("abc", "abc", $sim);
        echo $sim;
        //Output: 100

        $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
        $pieces = explode(" ", $pizza);
        echo nl2br("$pieces[0] \r\n"); //piece1
        echo nl2br("$pieces[1] \r\n"); //piece2
        echo nl2br("$pieces[2] \r\n"); //piece3
        //Output:
        //piece1
        //piece2
        //piece

        $data = "foo:*:1023:1000::/home/foo:/bin/sh";
        list($user, $pass, $uid, $gid, $gecos, $home, $shell)=explode(":",$data);

        echo nl2br("$user \r\n"); //foo
        echo nl2br("$pass \r\n"); //*
        echo nl2br("$uid \r\n"); //1023
        //Output:
        //foo
        //*
        //1023
        ?> 
    </body>
</html>
