<?php
if ($submit=="startseite"){ $f_data = 'startseite.inc'; $inhalt = $inhaltStartseite;}
if ($submit=="impressum") {$f_data = 'impressum.inc'; $inhalt = $inhaltImpressum;}
if ($submit=="buchungen") { $f_data = 'buchungen.inc'; $inhalt = $inhaltBuchungen;}
if ($submit=="kontakt") { $f_data = 'kontakt.inc'; $inhalt = $inhaltKontakt;}

	$f_post="";
	// Write to textFile
	$fp = fopen ( $f_data, 'wb' );
	fwrite ( $fp, $inhalt );
	fclose ( $fp );

         // Entferne überschüssige Zeilen umbrüche
         $array = file ( $f_data );
         // clean data
         $fp = fopen ( $f_data, 'wb' );
	fwrite ( $fp, "" );
	fclose ( $fp );

         for ( $x = 0; $x < count ( $array ); $x++ )
	{
                 //echo "<b>Zeile1:</b>$array[$x]";

                       $array[$x]=($array[$x]."<br>");
                 	$fp = fopen ($f_data, 'ab' );
			$f_search = "\\";
			$f_replace ="";
			$array[$x]=str_replace ( $f_search, $f_replace, $array[$x] );
			$f_search = "\n";
			$f_replace ="";
			$array[$x]=str_replace ( $f_search, $f_replace, $array[$x] );
			$f_post=($f_post.$array[$x]);



	}
         fwrite ( $fp, $f_post );
	fclose ( $fp );

         echo "Änderungen vorgenommen";
         echo "
         <form method='post' action='mc_adminSystems.php'>
         <input type='hidden' name='password' value='maxxicarsAdmin123'>
	<input type='hidden' name='name' value='admin'>
         <input type='submit' name='back' value='back'>
         </form>
         ";


//echo "Error Submit type unkown";
?>