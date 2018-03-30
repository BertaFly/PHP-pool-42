#!/usr/bin/php
<?php

$i = 1;
$k = 0;

$arr = array();
while ($i <= $argc)
{
	$arr[$k]=$argv[$i];
	$i++;
	$k++;
}
$arr = array_filter(explode(" ", $arr));
sort($arr);
print_r($arr);

?>