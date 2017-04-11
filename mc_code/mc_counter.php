<?php
// Counter Speicherdatei
$f_data = "counter.inc";
// Anzahl führender Nullen
$f_stellen = 5;
// Ip check Datei
$f_ipData ="ip.inc";
// Remote sperren Zeit in Minuten:
$f_time= 2;

// Check IP funktion

function mc_checkIP($rem_addr)
{
 $f_check=0;
 global $f_ipData;
 global $f_time;
 @$f_ipArray = file($f_ipData);
 $f_reloadData = fopen($f_ipData, "w");
 $f_thisTime=time();
 for($fi=0; $fi<count($f_ipArray); $fi++)
 {
 	list($f_ipAddr,$f_logTime) = explode("|",$f_ipArray[$fi]);
         if($f_thisTime < ($f_logTime+60*$f_time) && $f_ipAddr == $rem_addr) {$f_check=1;}
         else {fwrite($f_reloadData,"$f_ipAddr|$f_logTime");}
 }
 fwrite($f_reloadData,"$rem_addr|$f_thisTime\n");
 fclose($f_reloadData);
 return ($f_check==1) ? 1 : 0;

}

// Write Counter
if(mc_checkIP($REMOTE_ADDR)==0)
{

$fp=fopen($f_data,"r+");
$f_zahl=fgets($fp,$f_stellen);
$f_zahl++;
//echo "<p>$f_zahl</p>";
rewind($fp);
flock($fp,2);
fputs($fp,$f_zahl,$f_stellen);
flock($fp,3);
fclose($fp);
$f_zahl=sprintf("%0".$f_stellen."d",$f_zahl);
}

?>