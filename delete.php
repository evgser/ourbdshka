<?php 
	session_start();
	mysql_connect ("localhost", "root", "") or die ("Ошибка подключения к базе данных.");
	mysql_select_db ("mydb") or die ("Ошибка подключения к таблице базы данных.");
	$mysql_query(DELETE FROM table1 WHERE id='" . $_SESSION ['id'] . "');

	session_destroy();
	echo '<script type="text/javascript">
					alert ("Вы успешно удалили свою учетную запись. Возвращайтесь к нам,и удачных путешествий!");
				document.location.href = "index.php";
			</script>';
?>