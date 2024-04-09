<html>
<head>
</head>
<body>
<?php
	$numero = intval($_POST["num"]);
	$listanumeros = [];
	while ($numero > 0) {
		$listanumeros[] = $numero;
		$numero = $numero - 1;	
	}
	$contador = 1;
	foreach ($listanumeros as $valor) {
		echo "El valor " . $contador . " del array es: "    . $valor . "</BR>";
		$contador = $contador + 1;
	}
?>
</body>
</html>

