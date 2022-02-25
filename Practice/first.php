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
        //implode() - takes an array and joins elements into a string. Returns a string containing
        //            a string representation of all array elements: implode(
            /*
            separator - specifies where to break the string
            array - which array is to be used
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

        // $people = array('Laura', 'Katie', 'Bhavna', 'George');
        // $person = implode(' ', $people);
        // echo $person;

//////////////////////////////////////////////////////////////////////////////////////

        //ARRAYS//

        //Indexed Arrays//
        //$cars = array("Volvo", "BMW", "Toyota");
        //echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

        //Manually indexed
        // $cars [0] = "Volvo";
        // $cars [1] = "BMW";
        // $cars [2] = "Toyota";
        // echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

        //Associative Arrays - used to store key value pairs
        $people = array('Brad' => 35, 'Joe' => 32, 'William' => 37);
        echo $people ['Brad'];
        //displays 35 on the screen

        //Multi-Dimentional Arrays - allow you to define arrays within an array(nested array)
        $cars = array(
            array('Honda', 20, 10), //index 0
            array('Toyota', 30, 20), //index 1
            array('Ford', 23, 12), //index 2
        );

        echo $cars[1][0]; //print index 1, Toyota array, index position 0 displays Toyota
        echo $cars[0][2]; //print index 0, Honda array, index position 2 displays 10

        //value of an array can be another array. enables creation of recursive and multi-dimentional arrays
        $multidimentional = array(
            "fruits" => array ("a" => "orange", "b" => "banana", "c" => "apple"),
            "numbers" => array (10, 20, 30, 40, 50),
            "holes" => array ("first", 5 => "second", "third"));

            echo $multidimentional["holes"][5]; //output - second
            echo $multidimentional["fruits"]["a"]; //output - orange
            echo $multidimentional["numbers"][3]; //output - 40
            unset($multidimentional["holes"][0]); //removes "first"
            print_r($multidimentional); //print all the elements of array

            //php arrays can contain an integer and string keys at the same time
            $array = ["foo" => "bar", "bar" => "foo", 
                100 => -3000, -500 => 1000];
            var_dump($array);

        //array elements can be accessed using the array[key] syntax
        $info = array("foo" => "bar", 42 => 24, "arr" => array(1,2,3,4,5));
        echo $info["foo"]; //displays bar
        echo $info[42]; //displays 24
        print_r($info ['arr']); //prints nested array
        echo $info['arr'][0]; //displays the index [0] which is 1

        //Modifying existing arrays - done by assigning values to the array, specifying the key in brackets
        //                          - key can be omitted, resulting in empty brackets []
        //                          - if no key is specified, maximum of existing integer indicies is taken
        //                          - new key value will be that maximum value plus 1
        //                          - if no integer indices exist, key will be 0
        $arr = array(5 => 1, 12 => 2);
        $arr[] = 56;    //This is same as $arr[13] = 56;
        $arr["x"] = 42; //Adds a new element to the array with key "x"
        $arr[] = 66;    //This is the same as $arr[14] = 66;
        $arr[13] = 79;  //This replaces the calue at index 13
        unset($arr[5]); //This removes the element from the array
        unset($arr);    //This deletes the entire array

        //ARRAY SORT FUNCTIONS:
        /*
        sort() - sort arrays in ascending order
        rsort() - sort arrays the descending order
        asort() - sort associative arrays in ascending order, according to the value
        ksort() - sort associative arrays in ascending order, according to the key
        arsort() - sort associative arrays in descending order, according to the value
        krsort() - sort associative arrays in descending order, according to the key
        */
        
        $fruits = array("lemon", "orange", "banana", "apple");
            sort($fruits);

            foreach ($fruits as $title => $index) {
                echo "fruits[" . $title . "] = " . $index ."<br/>"; //concatenate
            }
            /*
            Output:
            fruits[0] = apple
            fruits[1] = banana
            fruits[2] = lemon
            fruits[3] = orange
            */

            //Array range function
            /*
            - allows you to create an array containing a range from start to end, inclusive
            - if a step value is given, it will be used as the increment between elements in the sequence
            - the step should be given as a positive number
            - if not specified, the step will default to 1
            */
            $numbers = range(0, 10);
            foreach ($numbers as $number){
                echo $number. " ";
            }
            //Output: 0 1 2 3 4 5 6 7 8 9 10
            
            //Array rand function
            /*
            - picks one or more random entries out of an array and returns the key(or keys) of random entries
            */
            $input = array("Apple", "Mango", "Banana", "Orange", "Grapes");
            $rand_keys = array_rand($input, 2);
            echo $input[$rand_keys[0]] . "<br/>";
            echo $input[$rand_keys[1]] . "<br/>";

            //Array slice function
            /*
            - extract a slice of the array
            - returns the sequence of elements from the array as specified by the offset and length params
            */
            $input = array("a", "b", "c", "d", "e");
            $output = array_slice($input, 2);
            print_r($output); //returns "c", "d", and "e"

            $output = array_slice($input, 0, 3);
            print_r($output); //returns "a", "b", and "c"

            //Array unshift function
            /*
            - array_unshift() function adds one or more elements to the beginning of an array
            - returns the new number of elements in the array
            */
            $queue = array("orange", "banana");
            array_unshift($queue, "apple", "raspberry");
            print_r($queue);
            //Output: Array([0] => apple [1] => raspberry [2] => orange [3] => banana)

            //Array key exists function
            /*
            - array_key_exists() function checks if the given key exists in the array
            - returns TRUE if the given key is set in the array FALSE otherwise
            */
            $search_array = array('first' => 1, 'second' => 4, 3 => 'apple');
            if (array_key_exists('first', $search_array)) {
                echo "The 'first key is in the array";
            }
            if (in_array("apple", $search_array)) {
                echo "<br/>";
                echo "The 'apple' element is in the array";
            }
            //Output: 
            //The 'first' key is in the array
            //The 'apple' element is in the array

            //MORE ARRAY FUNCTIONS:
            /*
            -> array_push() - push one or more elements onto the end of an array
            -> array_pop() - pop the element off the end of array
            -> array_shift() - shift an element off the beginning of an array
            -> array_diff() - computes the difference of arrays
            -> array_reverse() - return an array with elements in reverse order
            */
        ?> 
    </body>
</html>
