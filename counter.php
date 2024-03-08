<?php
// counter.php

// File to store the count
$countFile = 'counter.txt';

// Open the file for reading
$handle = fopen($countFile, 'r');

// Get the current count
$count = fgets($handle);

// Close the file
fclose($handle);

// Increment the count
$count++;

// Open the file for writing
$handle = fopen($countFile, 'w');

// Write the new count
fwrite($handle, $count);

// Close the file
fclose($handle);

// Display the count
echo "Total visitors: $count";
?>
