<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$fruteria = '{"frutas": [{
    "nombre_fruta":"Guayaba",
    "cantidad":10
 },{
    "nombre_fruta":"Pera",
    "cantidad":20
 },{
    "nombre_fruta":"Platano",
    "cantidad":20    
 },{
 	"nombre_fruta":"Manzana",
 	"cantidad":15
 },{
 	"nombre_fruta":"Fresa",
 	"cantidad":25
 }]}';

$fruteria = json_decode($fruteria,true);

echo "Inicia recorrido de JSON </br></br>";

//var_dump($fruteria);
 
foreach($fruteria['frutas'] as $item) {
    print $item['nombre_fruta'].'<br>';
    print $item['cantidad'].'<br>';
    
    print '<br>';
}

print '<br>';

?>

<select>

<?php
foreach($fruteria['frutas'] as $item2) {
	print " <option value=".$item2['nombre_fruta'].">".$item2['nombre_fruta']."</option>";
}
?>

</select>

</br>
</br>

<form>

<?php
foreach ($fruteria['frutas'] as $item3) {
	print "<label><input type='radio' name='fruta' value=".$item3['nombre_fruta'].">".$item3['nombre_fruta']."</label> </br>";
}
?>

</form>

</br>
</br>

<p>Cuales son tus frutas favoritas?</p>

<form>

<?php
foreach ($fruteria['frutas'] as $item4) {
	print "<label><input type='checkbox' name='fruta' value=".$item4['nombre_fruta'].">".$item4['nombre_fruta']."</label></br>";
}
?>

</form>

<form>
	<p>Nombre de la fruta:</p>
	<input type="text" name="nombre_fruta"></br></br>
	<p>Cantidad de la fruta:</p>
	<input type="text" name="cantidad"></br></br>
	<input type="reset">
</form>