#!/usr/bin/php
<?php

function	ft_split($str, $delim)
{
	$res = array();
	$arr = explode($delim, $str);
	foreach ($arr as $item)
		array_push($res, $item);
	return $res;
}

if ($argc > 1)
{
	$key = $argv[1];
	$arr = array();
	$i = 2;
	while ($i < $argc)
	{
		$tmp = ft_split($argv[$i], ':');
		$arr[$tmp[0]] = $tmp[1];
		$i++;
	}
	if (!is_null($arr[$key]))
		echo ($arr[$key] . "\n");
}

?>