#!/usr/bin/php
<?php

if ($argc > 1)
{
	$str = preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', $argv[1]);
	$str2 = preg_replace('/^\t+|\t+$|\t+(?=\t)/', '', $str);
	echo ($str2 . "\n");
}

?>