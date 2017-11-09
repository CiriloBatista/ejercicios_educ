<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#eli_ult").click(function(){
				$("#lista li:last").remove();
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("#eli_pri").click(function(){
				$("#lista li:first").remove();
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("#eli_num").click(function(){
				var num = $("#eliminar").val();
				console.log( num);
				//$("#lista").find("#item_"+num).remove();
				$("#item_"+num).remove();
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("#aña_tare").click(function(){
				$("#lista").append("<li>"+ $("#añadir").val()+ "</li>");
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("#limpiar").click(function(){
				$("li").remove();
			});
		});
	</script>
</head>
<body>	
	<!--<p>Esta es tu lista de Tareas!</p>-->
	<p>¡Esta es tu lista de Tareas!</p>
	<ol id="lista">
		<li id="item_1">Estudiar JQuery</li>
		<li id="item_2">Ir con el dentista</li>
		<li id="item_3">Ir al GYM</li>
		<li id="item_4">Comprar la cena</li>
	</ol>
	<button id="eli_ult">Eliminar &Uacute;ltima Tarea</button>
	<button id="eli_pri">Eliminar Primer Tarea</button></br></br>
	<p>Escribe cualquier n&uacute;mero</p>
	<input type="text" size="1" id="eliminar">
	<button id="eli_num">Eliminar n&uacute;mero</button></br></br>
	<input type="text" id="añadir">
	<button id="aña_tare">A&ntilde;adir tarea</button></br></br>
	<button id="limpiar">Eliminar la lista de Tareas?</button>
</body>
</html>