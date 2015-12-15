<?php
    header("Content-Type: text/html; charset=utf8");
    session_start();
?>
<html>
	<head>
	<meta content="html/text; charset=utf-8">
	<link href="style.css" rel="stylesheet"/>
		<title>
			Каучсерфинг
		</title>
	</head>

	<body background=images\index.jpg>
		<div id="window">
			<div id="header">
				<h1>CouchSurfing</h1>
			</div>
			<div id="input_main">
				<?php 
					if ($_SESSION["login"] != "")
					{
						echo "
						<form action='logout.php'>
						<button><font size=+3>Выйти из системы</font></button>
						</form>";
					}else{
						echo "
						<form action='login.php'>
						<button><font size=+3>Авторизация</font></button>
						</form>";
					}
				?>
				<?php 
					if ($_SESSION["login"] != "")
					{
						echo "
						<form action='cabinet.php'>
						<button><font size=+3>Личный кабинет</font></button>
						</form>";
					}else{
						echo "
						<form action='reg.php'>
						<button><font size=+3>Регистрация</font></button>
						</form>";
					}
				?>
			</div>
		</div>
	</body>
</html>