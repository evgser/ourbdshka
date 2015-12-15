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
		<title>Поиск туристов</title>
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
		<div id="window_find_master">
			<?php
			mysql_connect ("localhost", "root", "") or die ("Ошибка подключения к базе данных.");
			mysql_select_db ("mydb") or die ("Ошибка подключения к таблице базы данных.");
	
			$a=stripslashes (mysql_real_escape_string($_POST ['trip_country_find']));

			echo "$a";
	
			$bab = mysql_query ("SELECT pi.name,pi.phone,ti.language FROM personal_info pi NATURAL JOIN trip_info ti WHERE 
				pi.trip_id=ti.trip_id AND 
				ti.trip_country='".$a."'
				GROUP BY name
				limit 30");
				
			if ($bab)
			{
				echo "<table width='900px' align=center border='1'>
					<tr>
						<td align=center><font size=+2>Имя</font></td>
						<td align=center><font size=+1>Номер телефона</font></td>
						<td align=center><font size=+2>Языки, которыми владеет</font></td>
					</tr>";
				while ($k = mysql_fetch_array ($bab))
				{
					echo "<tr>";
					echo "<td align=center> ". $k['name'] ."</td>";
					echo "<td align=center>" . $k['phone'] . "</td>";
					echo "<td align=center> ".$k['language']."</td>";
					echo "</tr>";
				}
			}
			else
			{
				echo "Извините, подходящих нет.";
			}
			?>
		</div>
	</body>
</html>