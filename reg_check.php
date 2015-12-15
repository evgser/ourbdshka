<?php
    header("Content-Type: text/html; charset=utf8");
	session_start();
?>

<?php
	mysql_connect ("localhost", "root", "") or die ("Ошибка подключения к базе данных.");
	mysql_select_db ("mydb") or die ("Ошибка подключения к таблице базы данных.");
	
	$a1 = stripslashes (mysql_real_escape_string($_POST ['login']));
	$a2 = stripslashes (mysql_real_escape_string($_POST ['password']));
	$a3 = stripslashes (mysql_real_escape_string($_POST ['email']));
	$a = stripslashes (mysql_real_escape_string($_POST['email']));
	
	if (stripslashes (mysql_real_escape_string($_POST['password'])) != stripslashes (mysql_real_escape_string($_POST['pass-again'])))
	{
		echo '<script type="text/javascript">
				alert("Введенные пароли не совпадают.");
				document.location.href = "reg.php";
				</script>';
	}
	elseif (mysql_num_rows(mysql_query("SELECT * FROM login WHERE email='" . $a . "'")) == 1)
	{
		echo '<script type="text/javascript">
				alert("Данный email уже зарегистрирован в системе.");
				document.location.href = "reg.php";
				</script>';
	}
	elseif (mysql_num_rows(mysql_query("SELECT * FROM login WHERE login='" . stripslashes (mysql_real_escape_string ($_POST['login'])) . "'")) == 1)
	{
		echo '<script type="text/javascript">
				alert ("Данный логин уже зарегистрирован в системе.");
				document.location.href = "reg.php";
				</script>';
	}
	else
	{
		$_SESSION ['login'] = $a1;
		$_SESSION ['password'] = $a2;
		$_SESSION ['email'] = $a3;
		echo '<script type="text/javascript">
			document.location.href = "pers_reg.php";
			</script>';
	}
?>
