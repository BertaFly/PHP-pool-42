#!/usr/bin/php
<?php

if ($argc > 1)
{
	date_default_timezone_set("Europe/Paris");
	$str = preg_replace('/^\s+|\s+$|\s+(?=\s)|^\t+|\t+$|\t+(?=\t)/', '', $argv[1]);
	$data = array_filter(explode(" ", $str));
	$week_day = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
	$monthes = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
	$day = strtolower($data[0]);
	$date = $data[1];
	$month = strtolower($data[2]);
	$year = $data[3];
	$time = explode(":", $data[4]);
	$hour = intval($time[0]);
	$min = intval($time[1]);
	$sec = intval($time[2]);
	if (is_numeric($date) && is_numeric($year) && strlen($year) == 4 && strlen($date) < 3 && strlen($date) > 0 && intval($date) > 0 && intval($date) < 32)
	{
		if (strlen($data[4]) == 8 && $hour < 24 && $min < 60 && $sec < 60)
		{
			$month_nbr = 1;
			$k = 0;
			foreach ($monthes as $item)
			{
				if ($item == $month)
				{
					$k = 1;
					break ;
				}
				$month_nbr++;
			}
			$i = 0;
			foreach ($week_day as $value)
			{
				if ($value == $day)
					$i = 1;
			}
			if ($k == 1 && $i == 1)
			{
				$res = mktime($hour, $min, $sec, 11, $date, $year);
				echo $res . "\n";
			}
			else
				echo ("Wrong Format\n");
		}
		else
			echo ("Wrong Format\n");
	}
	else
		echo ("Wrong Format\n");
}

?>