<?php
# Y = years
# M = months
# D = days
# W = weeks
# H = hours
# M = minutes
# S = seconds

$date = new DateTime();
$date->setTimezone(new DateTimeZone("Asia/Jakarta"));
// $date->setDate(2020,12,10);
// $date->setTime(10,10,10);

$date->add(new DateInterval("P1Y"));
$dateInterval = new DateInterval("P1M");
$dateInterval->invert = 1;
$date->add($dateInterval);
var_dump($date);

echo $date->format("Y-m-d H:i:s") . PHP_EOL;
$date2 = DateTime::createFromFormat("Y-m-d H:i:s","1984-12-30 10:10:10",new DateTimeZone("Asia/Jakarta"));
var_dump($date2);