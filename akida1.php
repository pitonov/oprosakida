<?php
include("db.php");

$sql = "SELECT * FROM `voprosi` ORDER BY `id` DESC LIMIT 10";
$result = $mysqli->query($sql);

$i=0;
while ($row = $result->fetch_assoc())
{
	$i++;
	echo ("<form method=\"post\" action=\"zapros.php\"> ");
	echo ("Номер вопроса: " . $i . "<br>");
	echo ("Вопрос: " . $row["vopros"] . "<br>");
	echo ("<input type=\"radio\" name=\"vopros" . $i . "\"  value=\"otvet_false_1\"> " . $row["otvet_true"] . "<br>");
	echo ("<input type=\"radio\" name=\"vopros" . $i . "\"	value=\"otvet_false_1\"> " . $row["otvet_false_1"] . "<br>");
	echo ("<input type=\"radio\" name=\"vopros" . $i . "\"	value=\"otvet_false_2\"> " . $row["otvet_false_2"] . "<br>");
	echo ("<input type=\"radio\" name=\"vopros" . $i . "\"	value=\"otvet_false_3\"> " . $row["otvet_false_3"] . "<br>");
	echo ("<br>");
	
}	
	echo ("<input type=\"submit\" name=\"sbt\">");
	echo ("</form><br>");
$result->close();
$mysqli->close();
?>