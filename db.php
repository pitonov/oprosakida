<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

<?php

$db_host = "localhost";
$db_name = "opros";
$db_user = "root";
$db_pass = "";

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name) or die(mysqli_error());
$mysqli->query("SET NAMES utf8");

?>
</body>
</html>