<?php 

$frase = "A repetição é mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, $palavra); //Achar a posição que está a palavra no texto

$texto = substr($frase, 0, $q); //Pegar o texto do ponto 0 até chegar na posição da variável q

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));// comece a partir da $palavra soma +(quantidade de letras da palavra) e vai até o final da $frase

//strlen — Retorna o tamanho de uma string


echo "<br>";

var_dump($texto2);
 ?>