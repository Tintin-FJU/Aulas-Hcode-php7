<?php 

function soma(int ...$valores) {

	return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(22, 32);
echo "<br>";
echo soma(2.5, 2.5);
echo "<br>";

 ?>