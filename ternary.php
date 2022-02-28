<!-- make variable assignments based on some condition -->

<?php
$is_logged_in = true;
if ( $is_logged_in ) {
    $message = "Welcome back!";
} else {
    $message = "Hello There!";
}

// Ternary operator is a shorter way to do the above

// message variable GETS $is_logged_in, IF THIS IS TRUE, then "Welcome back!", OTHERWISE (if true) then "Hello there!
$message = $is_logged_in ? "Welcome back!" : "Hello there!";

echo $message;

// can also do this! with concatination:
$is_logged_in = false; // or true depending
$message = "Welcome" . ($is_logged_in ? " back!" : " to the site!");
echo $message;

// can also get rid of the assignment to a variable and just do it as an echo statement
$is_logged_in = false; // or true
echo "Welcome" . ($is_logged_in ? " back!" : " to the site!");
?>

<?php
// common use for ternary operators is when you want to set a variable based on dynamic content
// example:

$is_logged_in = true;
echo "Welcome" . ($is_logged_in ? " back!" : " to the site!");

// name gets isset (function that checks whether variable exists). if name is already set, use that name
// otherwise, use 'Joe'
$name = isset( $name ) ? $name : 'Joe';

echo $name;

// Elvis ternary ?:
// if name exists, use that, otherwise use Joe
$name = $name ?: 'Joe';
