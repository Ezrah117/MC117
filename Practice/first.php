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
        $name = 'Wesley';
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
    
        ?> 
    </body>
</html>