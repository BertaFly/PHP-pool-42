#!/usr/bin/php
<?php

function	ft_split($str, $delim)
{
	$str = str_replace(["\r", "\n", "\t"], " ", $str);
	while (strpos($str, "  ") !== false)
		$str = str_replace("  ", " ", $str);
	$str = trim($str);
	$arr = explode($delim, $str);
	$res = array();
	foreach ($arr as $item)
		array_push($res, $item);
	return $res;
}

if ($argc > 1)
{
	$key = $argv[1];
	$arr = array();
	$i = 2;
	for ($i = 2; $i < $argc; $i++)
	{
		$tmp = ft_split($argv[$i], ':');
		$arr[$tmp[0]] = $tmp[1];
	}
	if (!is_null($arr[$key]))
		echo ($arr[$key] . "\n");
}

?>