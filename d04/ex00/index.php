<?php

if ($_SESSION === NULL)
	session_start();
if ($_GET['login'] !== "" && $_GET['passwd'] !== "" && $_GET['submit'] == 'OK')
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}

?>
<html>
<style>
	.login-page {
		width: 360px;
		padding: 8% 0 0;
		margin: auto;
	}
	.form {
		position: relative;
		z-index: 1;
		background: #FFFFFF;
		max-width: 360px;
		margin: 0 auto 100px;
		padding: 45px;
		box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
	}
	.form input {
		font-family: sans-serif;
		outline: 0;
		background: #f2f2f2;
		width: 100%;
		border: 0;
		margin: 3px 0 15px;
		padding: 15px;
		box-sizing: border-box;
		font-size: 14px;
	}
	.form .button {
		font-family: sans-serif;
		text-transform: uppercase;
		outline: 0;
		background: #4CAF50;
		width: 100%;
		border: 0;
		padding: 15px;
		color: #FFFFFF;
		font-size: 14px;
		-webkit-transition: all 0.3 ease;
		transition: all 0.3 ease;
		cursor: pointer;
	}
	.form .button:hover, .form .button:active, .form .button:focus {
		background: #43A047;
	}
	body {
		background: #76b852; /* fallback for old browsers */
		background: -webkit-linear-gradient(right, #76b852, #8DC26F);
		background: -moz-linear-gradient(right, #76b852, #8DC26F);
		background: -o-linear-gradient(right, #76b852, #8DC26F);
		background: linear-gradient(to left, #76b852, #8DC26F);
		font-family: sans-serif;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}
</style>
<body>
	<div class="login-page">
		<div class="form">
			<form class="login-form" action="index.php" method="get">
				Username: <input type="text" name="login" value="<?php echo $_SESSION['login']?>" />
				<br />
				Password: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']?>" />
				<input type="submit" class="button" name="submit" value="OK" />
			</form>
		</div>
	</div>
</body></html>