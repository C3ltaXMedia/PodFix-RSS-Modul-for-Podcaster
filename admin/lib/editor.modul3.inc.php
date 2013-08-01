<?php
/**
* PodfixRSS by Michael McCouman jr.
* ---------------------------------
*
* @file Speichern "Neues Podcast - Speichermudul"
* @copy Copyright(c) 2012 by Michael McCouman jr
* @contact E-Mail: michael.mccouman@gmail.com
*
*/

//Einbindung der Datenbank
include '../-/inc/db.inc.php';
#
#	
###	//Variablen aus Übergabe:
	$LinkMP3Save = $_POST["savedate"];
	$HeaderSave  = $_POST["saveheader"];
	$ContentSave = $_POST["savecontent"];			
	$DayTimeSave = $_POST["savedaytotime"];
 
//Verbindung herstellen:
$verbindung = mysql_connect("$SQLhost", "$SQLuser", "$SQLpass") or die ("Keine Verbindung DB!");
#
### //Tabellen anfragen der DB Base!
	mysql_select_db("$SQLhostdb") or die ("Keine Verbindung Tabelle!");
	#
	#
	### //Speicher Daten in DB:
		$eintrag = "INSERT INTO rss
				(link, titel, text, tag)
				VALUES
				('$LinkMP3Save', '$HeaderSave', '$ContentSave', '$DayTimeSave')";
	#
	### //Eintrag erstellen:
		$ok = mysql_query($eintrag);
			#
			### //Ok:
				if($ok == true) { echo "Gespeichert! <a class='btn btn-primary' href='usercase.php' title='Zur Homeseite'>Zur&uuml;ck</a>"; } 
			#
			### //Error:
				else { echo "Fehler im System. Bitte versuche es später noch einmal..."; }
#
### //Verbindung beenden:
	mysql_close($verbindung);
?>