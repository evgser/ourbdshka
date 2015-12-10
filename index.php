<?php
    header("Content-Type: text/html; charset=utf8");
    session_start();
?>
<html>
	<head>
	<meta content="html/text; charset=utf-8">
		<title>
			Мертвые души
		</title>
	</head>
	
	<table cellspacing=0 cellpading=0 align=center background=images\gogol.jpg width="900px" height="1000px">
	<caption>Купите автомобиль выгодно!</caption>
	<tr valign=center height="100px" align=center>
		<td align=center colspan=3><font size=+4>Привествуем вас на сайте поиска наилучшего автомобиля для вас</font>
	</tr>
	<tr height="60px"><td rowspan=2></td></tr>
	<tr height="100px">
		<td align=left rowspan=1>
		<?php
			if ($_SESSION["login"] != "")
			{
				echo "
				<form action='logout.php'>
				&nbsp;&nbsp;<font size=+2><button>Выйти из системы</cabinet></font>
				</form>
				";
			}
			else
			{
				echo "
				<form action='login.php'>
				&nbsp;&nbsp;<button><font size=+3>Авторизация</font></button>
				</form>";
			}
		?>
		</td>
		<td align=right rowspan=1>
		<?php
		if ($_SESSION["login"] != "")
			{
				echo "
				<form action='cabinet.php'>
				<button><font size=+3>Личный кабинет</font></button>&nbsp;&nbsp;
				</form>
				";
			}
			else
			{
				echo "
				<form action='logon.php'>
					<button><font size=+3>Регистрация</font></button>&nbsp;&nbsp;
				</form>";
			}
			?>
		</td>
	</tr>
	<tr height="600px">
		<td colspan=2></td>
	</tr>
	</table>
	<body align=center>
	<form name="search" method="post" action="search.php">
    <input type="search" name="query" placeholder="Поиск">
    <button type="submit">Найти</button> 
</form>

	<font size=+1>AutoTrending</font>

	</body>
</html>