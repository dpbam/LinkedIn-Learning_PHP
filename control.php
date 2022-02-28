<!-- Control Structures -->
<!-- employ logic to code and execute statements based on specific conditions -->

<!-- If statements are the most common control structures -->

<?php
// first example
if ($a > $b) {
    echo 'a is greater than b';
}

// second example
if ($a > $b) {
    echo '$a is greater than $b';
} else {
    echo '$b is greater than $a';
}

// third example
if ($a > $b) {
    echo '$a is greater than $b';
} else if {
    echo '$b is greater than $a';
} else {
    echo '$a and $b appear to be equal';
}
?>

<?php
// A single "if" always goes first

// The first condition that evaluates to true will be the one that runs; the rest will be ignored

// The else statement always goes last–it serves as a catchall if none of the conditions are true


// Alternative Syntax - another format to write "if" statements

if ( true ) :
    echo 'it is true';
elseif :
    echo 'it is false';
else :
    echo 'they are equal'
endif;
?>

<?php

// great if have to write a lot of html and need to exit and enter the php tags a lot
?>

<?php if ( $home_page ) : ?>

<header>
    <h1>Welcome to the home page of my website!</h1>
    <p>Have a look around.</p>
</header>

<?php endif; ?>

