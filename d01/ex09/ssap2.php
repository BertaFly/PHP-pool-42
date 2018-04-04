#!/usr/bin/php
<?php

function	what_type($c)
{
	$a = ord($c);
	if ($a >= ord('a') && $a <= ord('z'))
		return 0;
	else if ($a >= ord('0') && $a <= ord('9'))
		return 1;
	return 2;
}

function	ssap2($a, $b)
{
	$a = strtolower($a);
	$b = strtolower($b);
	for ($i = 0; $a[$i] && $b[$i]; $i++)
	{
		$aa = what_type(substr($a, $i, 1));
		$bb = what_type(substr($b, $i, 1));
		if ($aa < $bb)
			return -1;
		else if ($aa > $bb)
			return 1;
		else if ($a[$i] != $b[$i])
			return ($a[$i] < $b[$i]) ? -1 : 1;
		$i++;
	}
	if ($a[$i] != $b[$i])
		return ($a[$i] < $b[$i]) ? -1 : 1;
	return 0;
}

if ($argc > 1)
{
	$arr = array();
	for ($i = 1; $i < $argc; $i++)
	{
		$str = str_replace(["\r", "\n", "\t"], " ", $argv[$i]);
		while (strpos($str, "  ") == true)
			$str = str_replace("  ", " ", $str);
		$str = trim($str);
		$input = explode(' ', $str);
		$arr = array_merge($arr, $input);
	}
	usort($arr, 'ssap2');
	foreach ($arr as $item)
		echo $item . "\n";
}

?>