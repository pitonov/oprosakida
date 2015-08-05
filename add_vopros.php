<html>
<head> 
<title> Добавить вопрос </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text\css" href="style.css" />
</head>


<body> 
<form method="post" action="" name="form_add">
<h2>Форма добавления вопроса в БД</h2>
Вопрос: <input type="text" name="vopros"><br>
Подсказка: <input type="text" name="podskazka"><br>
Верный ответ: <input type="text" name="otvet_true"><br>
Неверный ответ №1: <input type="text" name="otvet_false_1"><br>
Неверный ответ №2: <input type="text" name="otvet_false_2"><br>
Неверный ответ №3: <input type="text" name="otvet_false_3"><br>

<input type="submit" name="add">
</form>

<?php
include("db.php");

if($_POST["add"])
{
//данные передаваемые формой
	$vopros = $_POST["vopros"];
	$podskazka = $_POST["podskazka"];
	$otvet_true = $_POST["otvet_true"];
	$otvet_false_1 = $_POST["otvet_false_1"];
	$otvet_false_2 = $_POST["otvet_false_2"];
	$otvet_false_3 = $_POST["otvet_false_3"];
	
// запрос SQL для добавления вопроса
	$sql = "INSERT INTO voprosi(vopros, podskazka, otvet_true, otvet_false_1, otvet_false_2, otvet_false_3) VALUES('".$vopros."', '".$podskazka."', '".$otvet_true."', '".$otvet_false_1."', '".$otvet_false_2."', '".$otvet_false_3."')";
	$result = $mysqli->query($sql);
	
// проверка успешно ли добавлен вопрос
	if($result)
		{
			echo ("<h2>Вопрос добавлен<h2>");
			echo ("<strong>Вопрос: ". $vopros ."</strong></br>");
			echo ("<strong>Подсказка: ". $podskazka ."</strong></br>");
			echo ("<strong>Верный ответ: ". $otvet_true ."</strong></br>");
			echo ("<strong>Неверный ответ №1: ". $otvet_false_1 ."</strong></br>");
			echo ("<strong>Неверный ответ №2: ". $otvet_false_2 ."</strong></br>");
			echo ("<strong>Неверный ответ №3: ". $otvet_false_3 ."</strong></br>");
			echo ("<br><br><a href=\"/opros/add_vopros.php\">Добавить еще вопрос</a>");
			echo ("<br><a href=\"/opros/index.php\">На главную</a></br>");
		}
	else 
		{
			echo ("Ошибка в добавлении вопроса<br>");
			$mysqli_error($mysqli);
		}
$mysqli_close($mysqli);
}


?>
</body>


</html>