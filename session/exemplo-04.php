<?php 

session_id('6i8s2turmmjdr4sahl2h5oa1mf');

require_once("config.php");

//gera novamente um id de sessão
session_regenerate_id();

echo session_id();

//vizualisa todo aray global
var_dump($_SESSION);

 ?>