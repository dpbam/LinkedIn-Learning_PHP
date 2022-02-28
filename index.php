<?php
// Single line comment
    echo 'Hello World';
?>

<?php
/* multiple line 
comment */
?>

<?php

    // regular variable declaration
    $age = 34;

    // special variables called 'constants'

    define('VERSION', 1.1);
    echo VERSION;
    // case sensitive
    // echo version; // will not work
    // can't assign a new value to the variable
    // echo VERSION = 1.2; // will not work
    // define('VERSION', 1.2); // Also will not work

    // double vs. single quotes
    $name = "Joe";
    echo "Hello, $name"; // will print Hello, Joe
    echo 'Hello, $name'; // will print Hello, $name
    echo 'Hello, ' . $name . '!'; // will print Hello, Joe!
    echo 'Welcome to Joe\'s house!'; // will print Welcome to Joe's house! (with the escape character)

    // 
    echo 'This is line 1';
    echo 'This is line 2'; //these will get printed on the same line
    // 
    echo "This is line 1 \n";
    echo "This is line 2"; // these will print on different lines (they might render in the browser together, but check the source)

    


?>
