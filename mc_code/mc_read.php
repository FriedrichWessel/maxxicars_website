<?PHP
$value="startseite";
if ($value=="startseite") $f_data = 'startseite.inc';
if ($value=="impressum") $f_data = 'impressum.inc';
if ($value=="buchungen") $f_data = 'buchungen.inc';
if ($value=="kontakt") $f_data = 'kontakt.inc';

$array = file ( $f_data );

for ( $x = 0; $x < count ( $array ); $x++ )
{
  // herausnehmen von <br>
	$f_search = "<br>";
	$f_replace ="";
	$array[$x]=str_replace ( $f_search, $f_replace, $array[$x] );
	echo $array[$x];
}


?>