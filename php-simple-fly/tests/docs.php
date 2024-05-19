<?php

// Sample associative array
$array = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];

// Extract the array into variables
extract($array);

// Now you can use the variables directly
echo "Name: $name, Age: $age, City: $city";
