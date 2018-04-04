<?php

function	ft_split($str)
{
	$input = str_replace(["\r", "\n", "\t"], " ", $str);
	while (strpos($input, "  ") !== false)
		$input = str_replace("  ", " ", $input);
	$input = trim($input);
	$arr = explode(' ', $input);
	sort($arr);
	return $arr;
}

?>