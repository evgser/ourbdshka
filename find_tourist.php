<?php
    header("Content-Type: text/html; charset=utf8");
    session_start ();
    if ($_SESSION ['login'] == "")
    	echo '<script type="text/javascript">
			alert ("Для посещения этой страницы необходимо авторизоваться.");
			document.location.href = "login.php";
			</script>';
?>
<html>
	<head>
		<meta content="html/text; charset=utf-8">
		<link href="style.css" rel="stylesheet"/>
		<title>Поиск жилья</title>
	</head>
	<body background=images\index.jpg>
		<div class="container">
			<div class="box">
				<div>
					<form action="cabinet.php">
						<button><font size=+3>В личный кабинет</font></button>
					</form>
				</div>
			</div>
		</div>
		<div id="window_find_tourist">
			<?php
			mysql_connect ("localhost", "root", "") or die ("Ошибка подключения к базе данных.");
			mysql_select_db ("mydb") or die ("Ошибка подключения к таблице базы данных.");
	
			$a=stripslashes (mysql_real_escape_string($_POST ['city_find']));
	
			$city = mysql_result (mysql_query ("SELECT city FROM add_info WHERE city='".$a."'"), 0);//?
			$bab = mysql_query ("SELECT pi.name,pi.phone,ai.type,ai.street,ai.NumOfGuest FROM personal_info pi NATURAL JOIN add_info ai WHERE pi.add_id=ai.add_id AND ai.city='".$a."'
				GROUP BY name
				limit 30");
			if ($bab)
			{
				echo "<table width='1000px' align=center border=1>
				<tr>
					<td align=center><font size=+2>Имя</font></td>
					<td align=center><font size=+1>Номер телефона</font></td>
					<td align=center><font size=+2>Тип размещения</font></td>
					<td align=center><font size=+2>Улица</font></td>
					<td align=center><font size=+2>Максимальное количество гостей</font></td>
				</tr>";
			while ($k = mysql_fetch_array ($bab))
			{
				echo "<tr>";
				echo "<td align=center> ".$k['name']."</td>";
				echo "<td align=center>+7" . $k['phone'] . "</td>";
				echo "<td align=center> ".$k['type']."</td>";
				echo "<td align=center> ".$k['street']."</td>";
				echo "<td align=center> ".$k['NumOfGuest']."</td>";
				echo "</tr>";
			}
			echo "</table>";
			}
			else
			{
				echo "Извините, подходящих нет.";
			}
			?>
		</div>
	</body>
</html>