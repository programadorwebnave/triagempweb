<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

$r1 = $_POST["pergunta1"];
$r2 = $_POST["pergunta2"];
$r3 = $_POST["pergunta3"];
$r4 = $_POST["pergunta4"];
$r5 = $_POST["pergunta5"];
$r6 = $_POST["pergunta6"];
$r7 = $_POST["pergunta7"];
$r8 = $_POST["pergunta8"];
$r9 = $_POST["pergunta9"];
$r10 = $_POST["pergunta10"];

$resultado = $r1 + $r2 + $r3 + $r4 + $r5 + $r6 + $r7 + $r8 + $r9 + $r10;

echo $resultado; 


echo '<br />';

if($resultado >= 0 && $resultado <=4){
	echo "Tente novamente!!!";
}

if($resultado >= 5 && $resultado <=7){
	echo "insuficiente!!!";
}

if($resultado >= 8 && $resultado <=9){
	echo "Bom!!!";
}

if($resultado ==10){
	echo "Otimo!!!";
}

?>
</body>
</html>