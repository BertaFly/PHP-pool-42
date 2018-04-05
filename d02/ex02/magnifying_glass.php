#!/usr/bin/php
<?php

function replace_title($var)
{
	return 'title="'. strtoupper($var[1]) . '"';
}

function replace_txt($var)
{
	return '>'. strtoupper($var[1]) . '<';
}

function replace($var)
{
	$str = preg_replace_callback('/title="(.*)"/', "replace_title", $var[0]);
	$str = preg_replace_callback('/>(.*?)</', "replace_txt", $str);
	return $str;
}

$fp = fopen($argv[1], "r");
if ($argc > 1 && $fp != false)
{
	$arr = array();
	while ($line = fgets($fp))
		$arr[] = preg_replace_callback("/<a.*a>/", "replace", $line);
	foreach ($arr as $b)
		echo $b;
}
fclose($fp);

?>