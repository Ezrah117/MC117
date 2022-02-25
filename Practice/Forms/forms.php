<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Basic PHP Page</title>
    </head>

    <body>
        <?php
        /*
        <input> - used to define various types (text, radio, submit). Combined with type attribute
        <select> - used to define drop-down list. Combined with option tags to set options
        <textarea> - elements defines a multi-line text area
        <button> - defines a clickable button
        <datalist> - specifies a list of pre-defined options for an <input> element.
                     list attribute of the <input> element must refer to id attribute of <datalist> element
        <keygen> - provides a secure way to authenticate users. Specifies a key-pair generator field in form.
                   when form is submitted, two keys are generated (ptivate and public).
        <output> - represents the result of calculation
        <input type = "date"> - defines an input field for date value
        e.g:
        <form>
            <input type = "date" name = "birthday" />
        </form>

        <input type = "number"> - defines an input field for numeric value. Can set restrictions on numbers
        e.g:
        <form>
            <input type = "number" name = "salary" min = "3000" max = "70000" />
        </form>

        <input type "text"> - defines a one-line input field for text. Other attributes: maxlength, size, autofocus, etc. 
                            - name each element for php reference
        e.g:
        <form>
            <input type = "text" name = "user_name" size = 20 maxlength = 15 autofocus/>
        </form>

        maxlength = specifies maximum number of characters allowed in an <input> element
        size = specifies the width, in characters, of an <input> element
        autofocus = specifies that an <input> element should automatically get focus when the page loads

        <input type = "email"> - input field that should contain an email address
        e.g:
        <form>
            <input type = "email" name = "email_address"/>
        </form>

        <input type = "password"> - defines a password field. Characters are masked to hide user input. Can have other attributes
        e.g:
        <form>
            <input type="email" name="email"> <br/>
            <input type="password" name="user_password" size=25 maxlength=20 />
        </form>

        <input type = "radio"> - defines a radio button. Lets user select one option 
        e.g:
        <form>
            <input type = "radio" name = "gender" value = "Male"/>
            Male <br/>
            <input type = "radio" name = "gender" value = "Female"/>
            Female <br/>
        </form>

        <input type = "checkbox"> - defines a checkbox. Allows users to select one or more options from given choices
        e.g:
        <form>
            <input type = "checkbox" name = "machine" value = "Laptop"/> Laptop <br/>
            <input type = "checkbox" name = "machine" value = "Desktop"/> Desktop <br/>
            <input type = "checkbox" name = "machine" value = "Tab"/> Tab <br/>
        </form>

        <input type = "submit"> - defines the submit button used for submitting the form to the handler
                                  form handler is a server page with a script for processing input data
        e.g:
        <form>
            <input type = "submit" value = "Add User"/>
        </form>

        <select> - is used for creating a drop-down list
        <select name = "role"> - defines a drop-down list
        <option> - is used to set the options to select
        e.g:
        <form>
            <select name = "role">
                <option>Manager</option>
                <option>Designer</option>
                <option>Engineer</option>
            </select>
        </form>

        <textarea> - is used for a multi-line input
        <textarea name = "message"> - defines a multi-line text area. Controlled by attributes
        e.g:
        <form>
            <textarea name = "message" rows = "10" cols = "20">
            </textarea>
        </form>

        <button> - is used for defining a button
        <button type = "button"> - defines a clickable button
        e.g:
        <form>
            <button type = "submit" form = "form_id" value = "Submit">Submit</button>
        </form>

        ***ACTIONS***
        GET sends the data to in the URL
            • Quick and easy...but insecure.
            • People can see the information.
            • Some limits to the amount of information being sent
        e.g:
        <form action = "handle_form.php" method = "GET">
            <!-- form elements... -->
        </form>

        POST sends its information in the request header
            • Hidden to users.
            • Can handle more data.
            • Better security because the submitted data is not visible in the page address
        e.g:
        <form action = "process_page.php" method = "POST">
            <!-- form elements... -->
        </form>

        A required attribute indicates that a value must be specified for the input element.
        • The required attribute is Boolean and works with the following input types:
        • text, search, url, tel, email, password, date pickers, number, checkbox, radio, and file.
        • If the field set to required is left empty, the submit form won't proceed.
        • Example:
        <form action="process_page.php" method="POST">
            <input type="text" name="first_name" required />
        </form>

        The maxlength attribute indicates that the input must not exceed the specified length.
        • With a maxlength attribute, the input control will not accept more than the allowed number of characters.
        • For numerical values, you can use min & max attributes.
        • Example:
        <form action="process_page.php" method="POST">
            <input type="text" name="first_name" maxlength="15" required />
        </form>

        The pattern attribute specifies a regular expression that the <input> element's value is checked against.
        • The pattern attribute works with the following input types: text, search, url, tel, email, and password.
        • Example:
        <form action="process_page.php" method="POST">
            <input type="text" name="code" pattern="[A-Z]{2}[0-9]{2}" />
        </form>

        ***METACHARACTERS***
        \ - general escape character with several uses
        ^ - matches the beginning of a string
        $ - matches the end of a string
        . - matches any single character except newline \n
        | - OR (alternative) in php can be matched using pipe | character
        ? - extends the meaning of (, also 0 or 1 quantifier)
        * - O or more quantifier
        + - 1 or more quantifier
        () - start sub pattern and end sub pattern
        [] - square bracket (surround a pattern of characters)
        {} - start min/max quantifier and end min/max quantifier

        ***REGULAR PHP EXPRESSIONS***
        preg_match() - tells you if a string contains matches of a pattern
                       returns 1 if the pattern was found in the string and 0 if not
        preg_match_all() - returns the number of times the pattern was found in the string, which may be 0
        preg_replace() - returns a new string where matched patterns have been replaced with another string
        e.g:checks the validity of an email

        <?php
        $my_email = "wesleyrademan19980@gmail.com";
            if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$my_email)){
                echo "$my_email is a valid email address";
            }
            else {
                echo "$my_email is NOT a valid email address";
            }
        ?>
        • "/.../" - starts and ends the regular expression
        • "^[a-zA-Z0-9._-]" - matches any lower or upper-case letters, numbers between 0 and 9, and dots, underscores, and dashes
        • "+@[a-zA-Z0-9-]" - matches the @symbol followed by lower or upper-case letters, numbers between 0 and 9, or dashes
        • "+\.[a-zA-Z.]{2,5}$/" - escapes the dot using the backslash then matches any lower or upper-case letters with a character length between 2 and 5 at the end of the string

        ***HANDLING FORM DATA IN PHP***
        • When a form is submitted to a PHP script, the information from that form is automatically made available to the script.
        • This information can be accessed using PHP's superglobal variables.
        • We can use the following superglobals:
        • $_GET[] – If we used the method GET (in form attribute) then our form data would live in the $_GET superglobal array.
        • $_POST[] – If we used the method POST then our form data would live in the $_POST superglobal array.
        • $_REQUEST[] – If you don't care about the source of your request data. Data can come from GET, POST, COOKIE.

        $_GET['first_name']; // if GET method is used in form submission
        $_GET['last_name'];
        $_POST['first_name']; // if POST method is used in form submission
        $_POST['last_name'];
        $_REQUEST['first_name']; // GET, POST and COOKIE data...
        $_REQUEST['last_name'];

        • In order to handle multiple values from a form we must use an array.
        • When creating the form, you must also add the array operator '[]' to the end of the element name.
        • Example:
        <input type="checkbox" name="module[]" value="OOP"/> OOP <br/>
        <input type="checkbox" name="module[]" value="RD"/> RD <br/>
        <input type="checkbox" name="module[]" value="DSA "/> DSA <br/>
        <input type="checkbox" name="module[]" value="SSWD"/> SSWD <br/>
        // You can then use a foreach loop to handle it in PHP
        $module = $_POST['module'];
        foreach($module as $moduleTaken){
            echo "$moduleTaken <br/>";

        • When handling a form, we first want to make sure a form was submitted.
        • This can be done using a special PHP variable $_SERVER[].
        • $_SERVER['REQUEST_METHOD'] is used to check if the user has submitted a form using the specified method.
        • Example:
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            // process form...
        }
        */
        
        //ADDRESS BOOK EXAMPLE//
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            echo "<h3>New Contact Details:</h3>";
            echo "<h4>First name:</h4>".$_POST['first_name'];
            echo "<h4>Last Name:</h4>".$_POST['last_name'];
            echo "<h4>Mobile No:</h4>".$_POST['mobile_no'];
            echo "<h4>Email:</h4>".$_POST['email'];
            echo "<h4>Skype:</h4>".$_POST['skype'];
            echo "<h4>Address:</h4>".$_POST['address'];
        }
        else {
            echo "<h4>Please <a href='address_book.html'>Please return </a> and enter contact details!</h4>";
        }
        ?> 
    </body>
</html>