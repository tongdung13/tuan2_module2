<?php
include_once('Triangle.php');

$triangle = new Triangle(6,8,12);
echo 'Triangle Edge: ' . $triangle->string(). '<br><br>';
echo 'Triangle Area: ' . $triangle->getArea(). '<br><br>';
echo 'Triangle perimeter: '. $triangle->getPerimeter();