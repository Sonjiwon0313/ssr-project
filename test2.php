<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<center><h1>한세사이버보안고 프로젝트 결과물 제출 2</h1></center>
<hr>
<?php
	$name = $_POST["name1"];
	$age = $_POST["age"];
	$gender = $_POST["gender"];
	$context = $_POST["context"];

	echo "이름 : {$name}<br>";
	echo "나이 : {$age}<br>";
	echo "성별 : {$gender}<br>";
	echo "남기고싶은 말 : {$context}<br>";
?>
</body>
</html>