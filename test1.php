<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<center><h1>한세사이버보안고 프로젝트 결과물 제출 1</h1></center>
<hr>
<?php
	$gugu=$_POST["gugu"];
	if($gugu == "") {
		echo"<script>alert('값이 비어있습니다')</script>";
		echo"<script>history.back();</script>";
	}
	echo "입력받은 값 : {$gugu}<br><br>";
		for($i=2;$i<=9;$i++){
		$result = $gugu * $i;
		echo "{$gugu} * {$i} = {$result}<br>";
	}
?>
</body>
</html>