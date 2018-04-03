#!/usr/bin/php
<?php

if ($argc == 2)
{
	$input = str_word_count($argv[1], 1, '!"#$&\'(),.0123456789:;<=>?@[\]^_`{|}~');
	$operators = array('+', '-', '*', '%', '/');
	$i = 0;
	foreach ($operators as $sign)
	{
		if (($i = strpos($argv[1], $sign)))
			break ;
	}
	if ($i > 0)
	{
		if (is_numeric($input[0]) && is_numeric($input[1]))
		{
			if ($argv[1][$i] == '+')
				$res = $input[0] + $input[1];
			elseif ($argv[1][$i] == '-')
				$res = $input[0] - $input[1];
			elseif ($argv[1][$i] == '*')
				$res = $input[0] * $input[1];
			elseif ($argv[1][$i] == '/')
				$res = $input[0] / $input[1];
			elseif ($argv[1][$i] == '%')
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