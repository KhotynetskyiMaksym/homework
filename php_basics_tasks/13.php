<meta charset="UTF-8">
<?php
if (isset ($_POST["done"])) {
	$s = htmlspecialchars($_POST["first"]);
	$t = htmlspecialchars($_POST["second"]);
	if ($t == 0) {
		echo "На ноль делить нельзя";
		exit;
	}
 	//$s=400;//длина участка, который проехал автомобиль
//$t=4;//время движения в часах
$v1= $s / $t;//км/час
echo "$v1 (км/час)";
echo "<br>";
$v2 = $v1 * 1000 / 3600;
echo "$v2 (м/с)";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="first"><br>
		<input type="text" name="second"><br>
		<input type="submit" name="done" value="ok">
	</form>
</body>
</html>