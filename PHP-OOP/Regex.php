<?php
$mathces = [];
$res = (bool)preg_match_all("/eko|awan|edy/i","Eko Kurniawan Khannedy",$mathces);

var_dump($res);
var_dump($mathces);

$res = preg_replace("/anjing|bangsat/i","*****", "dasar lu anjing, bangsat");
var_dump($res);

$res = preg_split("/[\s,-]/","Eko Kurniawan Khannedy,Programmer,Zaman-Now");
var_dump($res);