<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 1</title>
</head>
<?php
function getCommonWords($newPost1, $newPost2){
	$var1 = $newPost1;
	$var2 = $newPost2;
	$separ = [',',':','.','?','!'];
  $var1 = str_replace($separ, ' ', $var1);
  $var2 = str_replace($separ, ' ', $var2);
	$arr1 = explode (' ', $var1);
	$arr2 = explode (' ', $var2);
			if ( count($arr1) > count($arr2) ) {
					return array_unique(array_intersect($arr1, $arr2));
			}
			else return array_unique(array_intersect($arr2, $arr1));
}
array_u
?>
<body>
	<form action="" method="POST">
		<p>Введите текст</p>
		<textarea name="text1"  cols="30" rows="10"></textarea>
		<p>Введите текст</p>
		<textarea name="text2"  cols="30" rows="10"></textarea><br>
		<input type="submit" name="send" value="send">
	</form>
</body>
</html>
<?php
	if ((isset($_POST['text1'])) && (isset($_POST['text2'])) && (isset($_POST['send']))) {
			$a = trim($_POST['text1']);
			$b = trim($_POST['text2']);
			$CommonWords = getCommonWords($a, $b);
	}
					if (sizeof($CommonWords) != false){
							echo "Слова которые есть и в первом и во втором поле ввода: ";
							foreach ($CommonWords as $word) {
								echo " ".$word;
							}
					}
?>