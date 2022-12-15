<?php
require_once "Data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL; // 0

$rec = new Rectangle();
echo $rec->getCorner() . PHP_EOL; // 4
echo $rec->getParentCorner() . PHP_EOL; // 0