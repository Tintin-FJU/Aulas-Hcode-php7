<?php 

$qualASuaidade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaidade < $idadeCrianca) {

	echo "Criança";

} else if ($qualASuaidade < $idadeMaior) {

	echo "Adolecente";

} else if ($qualASuaidade < $idadeMelhor) {

	echo "Adulto";
} else {

	echo "Idoso";
}

echo "<br>";

echo ($qualASuaidade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

 ?>