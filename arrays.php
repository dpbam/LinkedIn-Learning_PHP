<!-- Arrays in PHP -->
<?php
// Arrays

    // indexable arrays - use numbers as keys, numbered lists that start at 0
    // associative arrays - use strings as keys, Allows you to turn the numbered index into a string

    // Home Towns [
    //     'Joe' => 'Middletown, NY'
    //     'Erin' => 'Westchester, PA'
    //     'Dave' => 'Exton, PA'
    //     'Brian' => 'Grand Rapids, MI'
    // ]

    // Multidemensional Arrays - an array of arrays
 
    // Indexable Array - only need to define the values
    $colors = array('red', 'blue', 'green');

    print_r($colors);
    
    echo '<p>' . $colors[1] . '</p>';

        $colors[] = 'yellow';
        print_r( $colors );

// Associative Arrays - need to define the values AND keys
        $home_towns = array(
            'Joe' => 'Middletown, NY',
            'Erin' => 'Westchester, PA',
            'Dave' => 'Exton, PA',
            'Brian' => 'Grand Rapids, MI',
        );

        echo '<pre>';
        print_r( $home_towns );
        echo '</pre>';

        echo '<p>' . $home_towns['Dave'] . '</p>';

        // Multidimensional Array
        $brothers = array(
            'Joe' => array (
                'age' => 34,
                'job' => 'teacher',
                'state' => 'PA',
            ),
            'Phil' => array (
                'age' => 33,
                'job' => 'photographer',
                'state' => 'NY',
            ),
            'Mike' => array (
                'age' => 32,
                'job' => 'logistics',
                'state' => 'NY',
            ),
            'Rob' => array (
                'age' => 29,
                'job' => 'manager',
                'state' => 'FL',
            ),
        );

        echo '<pre>';
        print_r( $brothers );
        echo '</pre>';

        echo '<p>' . $brothers['Rob']['state'] . '</p>';

?>
