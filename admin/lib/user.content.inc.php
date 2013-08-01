<?php
# //Binde Angaben aus Install ein:
include '../-/inc/install.php';
			#
			#
//Überschrift:
echo '<h1>&Uuml;bersicht</h1>';
	//Infos:
	echo '<h3>Du findest hier eine &Uuml;bersicht aller Podcast Episoden</h3>
	<br>';
	#
	#
	//Icon Adapter:
	echo '<div class="row-fluid">
		<div class="span4"><center>Neuer Eintrag</center></div>
		<div class="span4"><center>Alle Eintr&auml;ge</center></div>
		<div class="span4"><center>...</center></div>
	</div>';  #
			  #
	//Unterbrecher:
	echo '<br><br>'; ####
						#
	// Tabelle Anfang: ##
	echo '<table class="table">
	<thead>
	 <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Episode</th>
		<th>MP3</th>
	 </tr>
	</thead>
	<tbody>'; ###############################################
															#
															#
################################################## DB Verbindung herstellen ######################################### 
#
//Warnung DB Angeschaltet
error_reporting(E_ALL);
	#
	### //Einbinden der DB Daten:
		include '../-/inc/db.inc.php';
		#
		#
		//Baue Verbindung auf:
		$dbh  = mysql_connect ($SQLhost, $SQLuser, $SQLpass); ###
																#
		//Verbinde mit DB Base: 								#
		mysql_select_db( $SQLhostdb ) or die("<div style='color:#f00; border:1px solid #a00; padding:10px;'>Auswahl der Datenbank fehlgeschlagen</div>");
		#
		###	//Gehe in DB und suche nach den XML Daten:
			$SqlSelect = "SELECT id, link, titel, text, tag 
							FROM rss 
							LIMIT 0,20"; ####
											#
		$result = mysql_query($SqlSelect); ##
		#
		###	//Fehler wenn Abfrage nicht möglich:
			if (!$result) { die('Error: Keine Verbindung mit der Datenbank möglich!' . mysql_error()); } 
			# 
			### //Erzeuge Ausgaben <items> aus Datenbank:
				while ($row = mysql_fetch_assoc($result)) {   
				#
#################
#
//Ausgabe Tabelle:
echo '<tr>
		<td>#';	
	echo $row['id']; 
	echo '</td>
		<td>';
	echo $row['titel']; 
	echo '</td>
		<td>';
	echo $row['tag'];
	echo '</td>
		<td>
		<a class="btn btn-primary" href="http://localhost/RSS/audio/';echo $Pod_name; echo $Pod_dote; echo $row['link']; echo '.mp3"> Play </a>';
echo '</td>
</tr>';
#
//Ausgabe Ende: #####
			}   	#
					#
	//Datenbank schließen:
	mysql_free_result($result); #####
									#
	//Datenbankverbindung kappen: ###
	mysql_close($dbh); 
			#
#############
#
//Ende der Tabelle:
echo '</tbody></table>';  

?>