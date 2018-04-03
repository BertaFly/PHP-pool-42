#!/usr/bin/php
<?php

function	ft_split($argv)
{
	$res = array();
	$arr = array_filter(explode(" ", $argv));
	foreach ($arr as $a)
	{
		array_push($res, $a);
	}
	return $res;
}

function	ssap($argv)
{
	$res = array();

	for ($i = 1; $i < count($argv); $i++)
	{
		$split = ft_split($argv[$i]);
		foreach ($split as $a)
			array_push($res, $a);
	}
	return $res;
}

$i = 0;

if ($argc > 1)
{
	$chars = array();
	$nbr = array();
	$left = array();
	$ssap = ssap($argv);
	foreach ($ssap as $a)
	{
		if (ctype_alpha($a[0]))
			array_push($chars, $a);
		elseif (ctype_digit($a[0]))
			array_push($nbr, $a);
		else
			array_push($left, $a);
	}
	natcasesort($chars);
	sort($nbr, SORT_STRING);
	sort($left);
	while (list(, $item) = each($chars))
		echo $item . "\n";
	while (list(, $item) = each($nbr))
		echo $item . "\n";
	while (list(, $item) = each($left))
		echo $item . "\n";
}

?>