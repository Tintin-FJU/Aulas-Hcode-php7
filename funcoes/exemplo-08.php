<?php 

function soma(int ...$valores):float {

	return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(22, 32);
echo "<br>";
echo soma(2.5, 3.5);
echo "<br>";

 ?>