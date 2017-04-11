<html>
<head>
<title>adminbereich</title>
<meta name="author" content="Administrator">
<meta name="generator" content="Ulli Meybohms HTML EDITOR">
</head>
<body text="#000000" bgcolor="#FFFFFF" link="#FF0000" alink="#FF0000" vlink="#FF0000">
<?php
if ($password=="maxxicarsAdmin123" && $name=="admin")
{
echo "
<form method='post' action='mc_post.php'>
<p>
	Startseite:<br>
         <input type='hidden' name='value' value='startseite'>
         <textarea name='inhaltStartseite' cols='120' rows='20;'>";include ("mc_readS.php"); echo"</textarea>
         <br><input type='submit' name='submit' value='startseite'><br>

</p>
<p>
	Buchungen:<br>
         <input type='hidden' name='value' value='buchungen'>
         <textarea name='inhaltBuchungen' cols='120' rows='20;'>";include ("mc_readB.php"); echo"</textarea>
         <br><input type='submit' name='submit' value='buchungen'><br>

</p>
<p>
	Kontakt:<br>
         <input type='hidden' name='value' value='kontakt'>
         <textarea name='inhaltKontakt' cols='120' rows='20;'>";include ("mc_readK.php"); echo"</textarea>
         <br><input type='submit' name='submit' value='kontakt'><br>

</p>
<p>
	Impressum:<br>
         <input type='hidden' name='value' value='impressum'>
         <textarea name='inhaltImpressum' cols='120' rows='20;'>";include ("mc_readI.php"); echo"</textarea>
         <br><input type='submit' name='submit' value='impressum'>

</p>
</form>
";
include("mc_readCounter.php");
echo "
<h2>Besucher auf der Seite:$f_zahl</h2>

";
}
else
echo "Username oder Passwort Falsch!";
?>
</body>
</html>