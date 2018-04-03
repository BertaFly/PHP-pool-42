<?php

function	ft_is_sort($arr)
{
	$origin = $arr;
	$to_compare = $arr;
	sort($to_compare);
	$to_compare2 = $arr;
	rsort($to_compare2);

	if ($origin == $to_compare)
		return true;
	else if ($origin == $to_compare2)
		return true;
	else
		return false;
}

?>