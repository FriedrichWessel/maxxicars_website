<?php
// Counter Speicherdatei
$f_data = "counter.inc";
// Anzahl führender Nullen
$f_stellen = 5;

$fp=fopen($f_data,"rb");
$f_zahl=fgets($fp,$f_stellen);
fclose($fp);
$f_zahl=sprintf("%0".$f_stellen."d",$f_zahl);

?>