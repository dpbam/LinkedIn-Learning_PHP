<!-- Switch Statements -->
<!-- Allow you to clearly make decisions based on the value of a single variable -->

<!-- switch then parentheses then the value we're looking to evaluate -->

<?php 

$total = 10;
switch( $total ) {
    // does our variable in question equal the following value
    // case 1 is saying "is the $total value 1?"
    case 1: 
        echo '$total is 1';
        break;
    case 2: 
        echo '$total is 2';
        break;
    // default is the catch all
    default:
        echo '$total is more than 2.';
}

// Alternative syntax of the above with : for the opening '{' and endswitch for the closing '}'
$total = 10;
switch( $total ) :
    // does our variable in question equal the following value
    // case 1 is saying "is the $total value 1?"
    case 1: 
        echo '$total is 1';
        break;
    case 2: 
        echo '$total is 2';
        break;
    // default is the catch all
    default:
        echo '$total is more than 2.';
    endswitch;

// Unlike if statements, they don't terminate upon finding a true statement
// Break statements are absolutely crucial
// Default serves as the catchall
// You can group cases together

?>

<?php

// other example (with strings)

$turtle = 'Leo';
$bandana = '';
switch ($turtle) {
    case 'Leo':
        $bandana = 'blue';
    break;
    case 'Raphael':
        $bandana = 'red';
    break;
    case 'Mike':
        $bandana = 'orange';
    break;
    case 'Don':
        $bandana = 'purple';
    break;
    
}

echo "<p>$bandana</p>";





