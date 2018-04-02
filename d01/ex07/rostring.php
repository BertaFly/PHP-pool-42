#!/usr/bin/php
<?php

function	ft_split($str)
{
	$arr = array_filter(explode(" ", $str));
	return $arr;
}

function	rostring($src)
{
	$arr = ft_split(preg_replace('/^\s+|\s+$|\s+(?=\s)/', ' ', $src) . " ");
	print_r($arr);
	$tmp = array_shift($arr);
	while (list(, $item) = each($arr))
	{
		echo $item . " ";
	}
	echo $tmp ."\n";
}

rostring($argv[1]);
?>