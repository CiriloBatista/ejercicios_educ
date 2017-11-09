
<html>
<head>
	<title>Metodo GET y POST</title>
</head>
<body>
<form action="parte3for.php" method="post">
	a. Nombre:
		<input type="text" name="nombre"></br></br>
	b. Sexo:</br>
		<label><input type="radio" name="sexo" value="h">Masculino</label></br>
		<label><input type="radio" name="sexo" value="m">Femenino</label></br>
<p>c. Hooby Preferido:</p>
		<select name="hobby">
			<option name="hobby" value="p">Jugar</option>
			<option name="hobby" value="r">Leer</option>
		</select></br></br>
	d. Intereses:</br>
		<label><input type="checkbox" name="interes[]" value="Estudiar">Estudiar</label></br>
		<label><input type="checkbox" name="interes[]" value="Trabajar">Trabajar</label></br></br>
	e. Id. perfil</br>
	Contrase&ntilde;a: <input type="password" name="contraseña"></br>
		<input type="hidden" name="id_perfil" value="44543"></br>
		<input type="submit" value="Enviar datos"></br></br>
</form>


</body>
</html>