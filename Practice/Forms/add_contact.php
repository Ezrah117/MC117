<?php
//ADDRESS BOOK EXAMPLE//
//Update the script with the htmlentities() method if applicable
//Update the script with the strip_tags() method if applicable
if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "<h3>New Contact Details:</h3>";
    echo "<h4>First name:</h4>".htmlentities(($_POST['first_name']));
    echo "<h4>Last Name:</h4>".htmlentities($_POST['last_name']);
    echo "<h4>Mobile No:</h4>".htmlentities($_POST['mobile_no']);
    echo "<h4>Email:</h4>".htmlentities($_POST['email']);
    echo "<h4>Skype:</h4>".htmlentities($_POST['skype']);
    echo "<h4>Address:</h4>".htmlentities($_POST['address']);
}
else {
    echo "<h4>Please <a href='address_book.html'>Please return </a> and enter contact details!</h4>";
    }
?>