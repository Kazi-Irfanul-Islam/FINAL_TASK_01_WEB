<?php
$a = 6;
$b = 5;
$c = 3;

if($a > $b && $a > $c) {
    echo "Largest is : a = $a";
} else if($b > $a && $b > $c) {
    echo "Largest is : b = $b";
} else {
    echo "Largest is : c = $c";
}
?>