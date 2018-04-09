<?php

$file = '../ex01/private/passwd';

if ($_POST['login'] !== "" && $_POST['oldpw'] !== "" && $_POST['newpw'] !== "" && $_POST['submit'] == 'OK' && $_POST['oldpw'] !== $_POST['newpw'])
{
	$i = 0;
	$file_cont = unserialize(file_get_contents($file));
	foreach ($file_cont as $key => $value)
	{
		if ($value['login'] === $_POST['login'])
		{
			if ($value['passwd'] === hash('whirlpool', $_POST['oldpw']))
			{
				$file_cont[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
				$serializedData = serialize($file_cont);
				file_put_contents($file, $serializedData);
				$i = 1;
				echo "OK\n";
				return ;
			}
		}
	}
}
if ($i !== 1)
{
	echo "ERROR\n";
	return ;
}

?>