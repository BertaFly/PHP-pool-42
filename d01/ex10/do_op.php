#!/usr/bin/php
<?php

if ($argc == 4)
{
	$a = intval($argv[1], 10);
	$b = intval($argv[3], 10);
	$oper = trim($argv[2]);
	if ($oper[0] == '+')
		$res = $a + $b;
	elseif ($oper[0] == '-')
		$res = $a - $b;
	elseif ($oper[0] == '*')
		$res = $a * $b;
	elseif ($oper[0] == '/')
		$res = $a / $b;
	elseif ($oper[0] == '%')
		$res = $a % $b;
	echo ($res . "\n");
	echo ($a . "\n");
	echo ($oper . "\n");
	echo ($b . "\n");

}
else
	echo ("Incorrect Parameters\n");

?>