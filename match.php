<!-- switch vs match -->

<!-- 1. Match compares values strictly (===) instead of loosely (==) as the switch statement does -->
<!-- 2. Match expression returns a value -->
<!-- 3. Match statements do NOT fall-through to later cases the way switch statements do. 
        The first true value it finds will exit the statement -->
<!-- 4. Match expression must be exhaustive; if you present it with a case that's not accounted for, it'll throw an error -->

<?php

$x = 0;

$result = match($x) {
    1 => '$x is 1',
    2 => '$x is 2',
    default => 'x is neither 1 nor 2',
};

echo $result;

// can combine cases on the left
$x = 0;

$result = match($x) {
    -2, -1, 0 => '$x is not positive.',
    1 => '$x is 1',
    2 => '$x is 2',
    default => 'x is neither 1 nor 2',
};

echo $result;

// We can execute functions based on the value we're checking
function add_to_x($x) {
    return $x + 5;
}

$x = 0;

$result = match($x) {
    -2, -1, 0 => add_to_x($x),
    1 => '$x is 1',
    2 => '$x is 2',
    default => 'x is neither 1 nor 2',
};

echo $result;

// We can check for boolean conditions as well

// We're checking whether true matches one of these statements 
$result = match(true) {
    $x <= 0 => '$x is not positive',
    $x == 1 '$x is 1',
    $x == 2 '$x is 2',
    default => '$x is neither 1 nor 2',
};

echo $result; // 'x is not positive'

// Let's rewrite the Ninja Turtles switch statement as a match statement
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

// as a match statement

$turtle = 'Leo';

$bandana = match($turtle) {
    'Leo' => 'blue',
    'Raphael' => 'red',
    'Mike' => 'orange',
    'Don' => 'purple',
    default => 'red',
};

echo $bandana