<?php
require_once "Helper\Math-Helper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Another example";
echo MathHelper::$name . PHP_EOL;

$r = MathHelper::sum(10,10,10,10,10);
echo "Result : $r" . PHP_EOL;