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

if ($argc == 2)
{
	$str = preg_replace('/^\s+|\s+$|\s+|^\t+|\t+$|\t+/', '', $argv[1]);
	$operators = array('+', '-', '*', '%', '/');
	$i = 0;
	foreach ($operators as $sign)
	{
		if (($i = strpos($str, $sign)))
			break ;
	}
	if ($i > 0)
	{
		$input = ft_split($str, $str[$i]);
		if (is_numeric($input[0]) && is_numeric($input[1]))
		{
			if ($str[$i] == '+')
				$res = $input[0] + $input[1];
			elseif ($str[$i] == '-')
				$res = $input[0] - $input[1];
			elseif ($str[$i] == '*')
				$res = $input[0] * $input[1];
			elseif ($str[$i] == '/')
				$res = $input[0] / $input[1];
			elseif ($str[$i] == '%')
				$res = $input[0] % $input[1];
			echo $res . "\n";
		}
		else
			echo ("Syntax Error\n");
	}
	else
		echo ("Syntax Error\n");
}
else
	echo ("Incorrect Parameters\n");

?>