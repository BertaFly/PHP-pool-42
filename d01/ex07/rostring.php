#!/usr/bin/php
<?php

if ($argc > 1)
{
	$input = str_replace(["\r", "\n", "\t"], " ", $argv[1]);
		while (strpos($input, "  ") !== false)
			$input = str_replace("  ", " ", $input);
	$input = trim($input);
	$arr = explode(' ', $input);
	$tmp = array_shift($arr);
	foreach ($arr as $item)
			echo $item . " ";
	echo $tmp ."\n";
}

?>