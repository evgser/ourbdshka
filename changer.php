<?php
    header("Content-Type: text/html; charset=utf8");
?>
<html>
	<head>
		<meta content="html/text; charset=utf-8">
		<title>
			Регистрация
		</title>
	</head>
	<table background="images\manilov.jpg" width="900px" height="910px" align=center>
		<tr height="30px">
			<td colspan=1 align=left>
				<font align=center size=+4>&nbsp;&nbsp;Регистрация</font>
			</td>
			<td align=right valign=top>
				<form action="index.php">
					<button>На главную</button>
				</form>
				<form action="login.php">
					<button>Авторизация</button>
				</form>
			</td>
		</tr>
		<tr height="200" colspan=2>
			<td>
			<form action="pre_logon.php" method="post">
				&nbsp;Введите email:
				<br>
				&nbsp;<input value="email" name="email">
				<br><br>
				&nbsp;Логин:
				<br>
				&nbsp;<input value="Логин" name="login">
				<br><br>
				&nbsp;Пароль:
				<br>
				&nbsp;<input value="Пароль" type="password" name="password">
				<br>
				<br>
				&nbsp;Введите пароль еще раз:
				<br>
				&nbsp;<input value="Петухи" type="password" name="pass-again">
				<br>
				<br>
				
				&nbsp;<input type="submit" value="Зарегистрироваться" name="reg">
				</form>
			</td>
		</tr>
		<tr height="500">
		<td></td>
		</tr>
		<tr height="100">
			<td colspan=2>
				
			</td>
		</tr>
	</table>
		<body align=center>

	<font size=+1>Tol'n'Gleb © 2014</font>

	</body>

</html>
