<?php 

//É pra saber qual o time stamp da data
//echo strtotime("1993-11-27");
//
//$ts = strtotime("1993-11-27");
$ts = strtotime("+1 week");

echo date("l, d/m/Y", $ts);
 ?>