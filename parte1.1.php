<?php
switch (orden){
	case buscar:
	if (orden == buscar) {
		echo header('Location: www.google.com');
	}
	break;
	case correo:
	if (orden == correo) {
		echo header('Location: mail.ucol.mx');
	}
	break;
	case biblioteca:
	if (correo == biblioteca) {
		echo header('Location: conricyt.mx');
	}
	break;
	case educ:
	if (biblioteca == educ) {
		echo header('Location: educ.ucol.mx');
	}
	default:
	if (educ != buscar) {
		echo "No hago nada";
	}
	//break;
}	
?>