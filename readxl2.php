<?php
$list ="mj, Patel";
$file = fopen("test.csv","w");
fputcsv($file,explode(',',$list));
fclose($file);
?>