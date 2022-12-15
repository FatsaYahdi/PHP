<?php
// is_string()          Apakah tipe data string
// is_bool()            Apakah tipe data boolean
// is_int()             Apakah tipe data number integer
// is_float()           Apakah tipe data number floating point
// is_array()           Apakah tipe data array
// is_callable()        Apakah tipe data callable

$data = 'sample';
var_dump(is_string($data));

$data = true;
var_dump(is_bool($data));

$data = 1;
var_dump(is_int($data));

$data = 1.1;
var_dump(is_float($data));

$data = [];
var_dump(is_array($data));

$data;
var_dump(is_callable($data));
