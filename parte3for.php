<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

	<p>Tus datos son:</p>

<?php
if($_POST){
	echo "Id. ".$_POST['id_perfil'].". </br></br>";
	echo "Nombre: ".$_POST['nombre'].". </br>";
	echo "Contrase&ntilde;a: ".$_POST['contraseña'].". </br>";
	if ($_POST['sexo'] == h) {
		echo "Sexo: Masculino. </br>";
	}
	else
		echo "Sexo: Femenino. </br>";
	if ($_POST['hobby'] == p) {
		echo "Hooby: Jugar. </br>";
	}
	else
		echo "Hooby: Leer. </br>";
	foreach ($_POST['interes'] as $intereses) {
		 echo "Intereses: ".$intereses.".</br>";
	}

	//var_dump($_POST['interes']);

	if(isset($_POST['nombre'])){
		echo "</br> Formulario definido! :)";
	}
	else
		echo "</br> Formulario indefinido! :(";
		echo "</br>";


}
?>
<a href="parte3.php?id_perfil=44543">Modificar Perfil</a>

</body>
</html>