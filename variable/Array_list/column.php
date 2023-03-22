<?php
// An array that represents a possible record set returned from a database
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
);
  $last_names = array_column($a, 'last_name');
print_r($last_names);
?>