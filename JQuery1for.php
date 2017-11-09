<!DOCTYPE html>
<html>
<head>
	<title>JQuery</title>
	<script type="text/javascript">
	function mostrar(){
		document.getElementById('noticias').style.display = 'block';}
	</script>
	<script type="text/javascript">
	function ocultar(){
		document.getElementById('noticias').style.display = 'none';}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$("#ejemplo").ready(function(){
			$("select[name=notici]").change(function(){
				$("#etinoticia").text("Usted a seleccionado la noticia:"+ $("#notici").val());
				//$("select[name=notici]").text();
				//$("#notici").val($(this).val());
			});
		});
	</script>
	<script>
		function alertar(){
			var nombre = $("#nombre").val();
			var direccion = $("#direccion").val();
			var tel = $("#tel").val();
			var sexo = $("input[id='sexo']:checked").val();
			var noti = $("#notici").val();
		//$("#mensaje").html("<b>Nombre</b>"+nombre);
			alert("Nombre: " + nombre + " \nDirección: "+ direccion + " \nTeléfono: " + tel
				+ "\nSexo: " + sexo + "\nSeleccionaste: La " + noti);
 		return false;

			/*var uno = "Nombre: ".$_POST['nombre'].". ";
			var dos = "Dirección: ".$_POST['direccion'].". ";
			var tres = "Telefono: ".$_POST['tel'].". ";
			var cuatro = "Sexo: ".$_POST['sexo'].". ";
			var cinco = "Seleccionaste: La ".$_POST['notici'].". ";
			var datos = alert(uno.concat(dos, tres, cuatro, cinco)) = datos;
			document.getElementById('confirmar')*/
			
		}
	</script>
</head>
<body>
	<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	?>

	<form id="ejemplo" action="#" method="post" onsubmit="return alertar();">
		<p>Nombre:</p><input type="text" name="nombre" id="nombre"></br>
		<p>Direcci&oacute;n:</p><input type="text" name="direccion" id="direccion"></br>
		<p>Tel&eacute;fono:</p><input type="text" name="tel" id="tel"></br>
		<p>Sexo:</p><label><input type="radio" name="sexo" id="sexo" value="Masculino">Masculino</label></br>
					<label><input type="radio" name="sexo" id="sexo" value="Femenino">Femenino</label>
	
		<p>&iquest;Deseas ver las noticias?</p>
		<span id="etinoticia">Usted a seleccionado la noticia: </span></br>
		
		<input type="button" name="si" value="Si" onclick="mostrar()"></br>
			<div id="noticias" style="display: none;">
			<select name="notici" id="notici">
				<option id="notic" value="noticia1">noticia1</option>
				<option id="notic" value="noticia2">noticia2</option>
				<option id="notic" value="noticia3">noticia3</option>
				<option id="notic" value="noticia4">noticia4</option>
			</select>
			</div>
		<input type="button" name="no" value="No" onclick="ocultar()"></br></br>
		<input type="reset" name="cancelar" value="Cancelar">
		<input type="submit" name="confirmar" value="Confirmar" ></br>
	</form>
	
</body>
</html>