<?php
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["niveau"]))
{
	echo "<h2> Bonjour M ".htmlentities($_POST["nom"]). " ".htmlentities($_POST["prenom"]). ", vous etes ".$_POST["niveau"]. " en PHP 5</h2>";
}
?>