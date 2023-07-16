<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        // Print alternating 1s and 0s based on row and column indices
        echo ($i + $j) % 2;
    }
    echo "\n";
}
?>
