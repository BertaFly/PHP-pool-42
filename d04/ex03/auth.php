<?php

function auth($login, $passwd)
{
	if ($login !== "" && $passwd !== "")
	{
		$file = '../ex01/private/passwd';
		$pass_hash = hash('whirlpool', $passwd);
		$file_cont = unserialize(file_get_contents($file));
		foreach ($file_cont as $key => $account)
		{
			if ($account['login'] === $login)
			{
				if ($account['passwd'] === $pass_hash)
					return TRUE;
			}  
		}
	}
	return FALSE;
}

?>