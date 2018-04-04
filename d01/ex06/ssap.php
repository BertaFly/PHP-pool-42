#!/usr/bin/php
<?php

if ($argc > 1)
{
	$arr = array();
	for ($i = 1; $i < $argc; $i++)
	{
		$str = str_replace(["\r", "\n", "\t"], " ", $argv[$i]);
		while (strpos($str, "  ") !== false)
			$str = str_replace("  ", " ", $str);
		$str = trim($str);
		$input = explode(' ', $str);
		$arr = array_merge($arr, $input);
	}
	sort($arr);
	foreach ($arr as $item)
		echo $item . "\n";
}

?>