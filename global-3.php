<?php
$x=5;
$y=10;
echo $y; echo"<br>";
function myTest(){
    $GLOBALS['y']=$GLOBALS['x']+ $GLOBALS['y'];
}
myTest();
echo $y;
?>