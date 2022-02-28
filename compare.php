<!-- Comparison or Boolean Statements -->
<!--  will always evaluate to true or false -->

<!-- Compare equality with == -->
<!-- 42 == 42 is true -->
<!-- 2 == 7 is false -->

<!-- because PHP is weak typed it doesn't care about type strictly like JavaScript -->
<!-- '1' == 1 would evaluate to true -->

<!-- If you do want to check type AND value use Identical Comparison with === -->
<!-- 1 === 1 is true -->
<!-- '1' === 1 is false -->

<!-- Greater than and less than -->
<!-- Greater than (and Less than) or Equal true -->

<!-- Not or Negation operator with ! -->
<!-- != is "not equal" -->
<!-- !== is "not identical -->
<!-- 7 != 7 is false -->
<!-- !(7 == 7 ) is also false, as it's saying "the opposite of 7 == 7" -->

<!-- Logical Operators -->
<!-- Combine comparison statements and evaluate the overall truthfulness -->

<!-- && is AND -->
<!-- (true && true) is true, for example, "The sky is blue AND the sun is yellow" -->
<!-- (true && false) is false, for example, "The sky is blue AND the grass is pink" -->

<!-- || is OR -->
<!-- evaluates to true if one of two statements are true -->
<!-- evaluates to false if both statements are false -->

<?php

$a = 9 > 5; //true
$b = 10 != 10; //false
$c = $a && $b; //false
$d = $a || $b; //true
$e = $b && $c; //true
$f = $a || $d; //true

$logic = array( $a, $b, $c, $d, $e, $f);

echo '<pre>';
// print_r( $logic );
var_dump( $logic );
echo '</pre>';

// ^ is XOR
// evaluates to true if one statement but NOT all statements are true

// (true ^ true) is false
// (true ^ false) is true
// (false ^ false) is false
// (true ^ true ^ false) is true
// (true ^ true ^ true) is false
