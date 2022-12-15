<?php
require_once "Data/Conflict.php";
require_once "Data/Helper.php";

use Data\One\{Conflict as c1, Dummy as dum, Sample as sam};
use function Helper\{helpMe};

$c1 = new c1();
$dum = new dum();
$samp = new sam();