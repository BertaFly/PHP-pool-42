<?php

function	ft_is_sort($arr)
{
	$origin = $arr;
	$to_compare = $arr;
	sort($to_compare);
	if ($origin == $to_compare)
		return true;
	else
		return false;
}

?>