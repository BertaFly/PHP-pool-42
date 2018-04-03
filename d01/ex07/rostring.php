#!/usr/bin/php
<?php

if ($argc > 1)
{
	$arr = str_word_count($argv[1], 1, '!"#$%&\'()*+,.-/0123456789:;<=>?@[\]^_`{|}~');
	$tmp = array_shift($arr);
	foreach ($arr as $item)
			echo $item . " ";
	echo $tmp ."\n";
}

?>