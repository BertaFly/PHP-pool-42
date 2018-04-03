#!/usr/bin/php
<?php

function	ft_split($str)
{
	$arr = array_filter(explode(" ", $str));
	sort($arr);
	return $arr;
}

$i = 0;

if ($argc > 1)
{
	while ($i < $argc)
	{
		$str .= preg_replace('/^\s+|\s+$|\s+(?=\s)/', ' ', $argv[$i + 1]) . " ";
		$i++;
	}
}

$arr = ft_split($str);
while (list(, $item) = each($arr))
	echo $item . "\n";

?>