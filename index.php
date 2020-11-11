<?php
include_once('Point2D.php');
include_once('Point3D.php');

$point = new Point2D(5,6);
echo 'String: ' . $point->string(). '<br><br>';

$point = new Point3D(7,8,1);
echo 'String: ' . $point->string();