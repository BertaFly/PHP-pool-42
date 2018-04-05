<?php

if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys')
{
	header("Content-Type: text/html");
	$file = file_get_contents("../img/42.png");
	$file = base64_encode($file);
	echo "<html><body>\n";
	echo "Hello Zaz<br />\n";
	echo "<img src='data:image/png;base64,";
	echo $file;
	echo "'>\n";
	echo "</body></html>\n";
	
}
else
{
	
	header('WWW-Authenticate: Basic realm=\'Member area\'');
	header('HTTP/1.0 401 Unauthorized');
	header("Connection: close");
	header("Content-Type: text/html");
	echo "<html><body>That area is accessible for members only</body></html>";
}

?>
