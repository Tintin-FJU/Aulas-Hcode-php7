<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Messias',
	'idade' => 23
));

echo json_encode($pessoas);

 ?>