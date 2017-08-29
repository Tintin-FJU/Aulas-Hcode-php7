<?php 	
/*
$anoNascimento = 1993;

$nomeCompleto = "";*/
//Na linha de baixo temos uma variável com número no nome
$nome1 = "João";

$sobrenome = "Deivid";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nome1)) {
	
	echo $nome1;
}


 ?>

 