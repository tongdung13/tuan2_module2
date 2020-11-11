<?php
include_once('Point2D.php');
include_once('MovablePoint.php');

$point = new Point2D(6,12);
echo 'Point2D: ' . $point->string(). '<br><br>';

$move = new MovablePoint(4,7,71,34);
echo 'Move: ' . $move->string(). '<br><br>';

echo 'Move: '. $move->move();