#!/usr/bin/php
<?php

if ($argc == 2)
{
	$input = preg_replace('/\s\s+/', ' ', $argv[1]);
	$input = trim($input);
	$input = explode(' ', $input);
	$operators = array('+', '-', '*', '%', '/');
	$i = 0;
	foreach ($operators as $sign)
	{
		if ($input[1] == $sign)
			$i = 1;
	}
	if ($i == 1)
	{
		if (is_numeric($input[0]) && is_numeric($input[2]))
		{
			if ($input[1] == '+')
				$res = $input[0] + $input[2];
			elseif ($input[1] == '-')
				$res = $input[0] - $input[2];
			elseif ($input[1] == '*')
				$res = $input[0] * $input[2];
			elseif ($input[1] == '/')
				$res = $input[0] / $input[2];
			elseif ($input[1] == '%')
				$res = $input[0] % $input[2];
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