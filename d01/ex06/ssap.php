#!/usr/bin/php
<?php

if ($argc > 1)
{
	$arr = array();
	for ($i = 1; $i < $argc; $i++)
	{
		$str = str_word_count($argv[$i], 1, '!"#$%&\'()*+,.-/0123456789:;<=>?@[\]^_`{|}~');
		$arr = array_merge($arr, $str);
	}
	sort($arr);
	foreach ($arr as $item)
		echo $item . "\n";
}

?>