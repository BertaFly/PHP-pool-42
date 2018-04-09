<?php

$file = 'private/passwd';
if (file_exists($file) === FALSE)
	mkdir('private');
if ($_POST['login'] !== "" && $_POST['passwd'] !== "" && $_POST['submit'] == 'OK')
{
	$arr['login'] = $_POST['login'];
	$arr['passwd'] = hash('whirlpool', $_POST['passwd']);
	$file_cont = unserialize(file_get_contents($file));
	foreach ($file_cont as $key => $value)
	{
		if ($value['login'] === $_POST['login'])
		{
			echo "ERROR\n";
			$i = 1;
			return ;
		}
	}
	if ($i !== 1)
	{
		$file_cont[] = $arr;
		echo "OK\n";
	}
	$serializedData = serialize($file_cont);
	file_put_contents($file, $serializedData);
}
else
{
	echo "ERROR\n";
	return ;
}

?>