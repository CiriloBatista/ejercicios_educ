<?php

$n=0;
$num = 3;
$residuo = 0;


while ($num <= 100){
	$n=2;
	$esprimo = true;
	while($n < $num){
		$residuo = $num % $n;
		if ($residuo == 0){
			$esprimo = false;
			break;
		}
		$n++;
	}
	if ($esprimo == true)
		echo "$num Si</br>";
	else
		echo "$num no</br>";
	
$num++;
}


?>