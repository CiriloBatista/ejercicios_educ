<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$("#ejemplo").ready(function(){
			$("select[name=notici]").change(function(){
				$("select[name=notici]").text();
				$("#valor1").val($(this).val());
			});
		});
	</script>
</head>
<body>
	<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	if($_POST){
		echo "Nombre: ".$_POST['nombre'].".</br>";
		echo "Direcci&oacute;n: ".$_POST['direccion'].".</br>";
		echo "Tel&eacute;fono: ".$_POST['tel'].".</br>";
		if ($_POST['sexo'] == 'm') {
			echo "Sexo: Masculino.</br>";
		}
		else
			echo "Sexo: Femenino.</br>";
		echo "Elegiste: La ".$_POST['notici']."</br>";
	}
	?>

</body>
</html>