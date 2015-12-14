<?php
    header("Content-Type: text/html; charset=utf8");
	session_start();
?>
<html>
	<head>
		<meta content="html/text; charset=utf-8">
		<title>
	 		Изменение ваших личных данных 
		</title>
	</head>
	<table background="images\manilov.jpg" width="900px" height="910px" align=center>
		<table>
  	   <?php
        echo ('    &nbsp;Ваше имя:
				<br>
				&nbsp;<input value="$_SESSION['name']" name="name">
				<br><br>
				&nbsp;Телефон:
				<br>
				&nbsp;<input value="$_SESSION['phone']" name="phone">
				<br><br>
				&nbsp;Страна:
				<br>
				&nbsp;<input value="$_SESSION['country']" name="country">   
				');
				
				mysql_query("UPDATE personal_info(name,phone,country) FROM personal_info SET name='".$_POST['name']."', phone='".$_POST['phone']."',country='".$_POST['country']."'  ")
				
        }         
    		
    ?>
                </table> 
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
