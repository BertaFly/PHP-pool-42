#!/usr/bin/php
<?php

if ($argc == 2)
{
	$arr = str_word_count($argv[1], 1, '!"#$%&\'()*+,.-/0123456789:;<=>?@[\]^_`{|}~');
	$str = implode(" ", $arr);
	echo ($str . "\n");
}

?>