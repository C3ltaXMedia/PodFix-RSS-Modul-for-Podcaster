<?php 
/**
* PodfixRSS by Michael McCouman jr.
* ---------------------------------
*
* @file Speichern "Neues Podcast - Sendemodul"
* @copy Copyright(c) 2012 by Michael McCouman jr
* @contact E-Mail: michael.mccouman@gmail.com
*
*/


#Einbindungen Variablen:
include '../../-/inc/install.php'; ##############
												#
############################################# Infos: ######################################################
#
### //Überschrift:
	echo '<h1>Zusammenfassung:</h1>';

	//Informationen:
	echo '<p>
			Du bekommst hier noch einmal eine Zusammenfassung aller Daten die zur Zeit f&uuml;r deinen neuen Eintrag 
			gesetzt wurden. Klicke auf "Speichern" um deinem Feed eine neue Podcastepisode zu zuf&uuml;gen.
		</p>';
			#
			#####################################
												#
############################################ Uploader #####################################################
#
# Gehe zur Datei mit GET:
	$dateityp = file_get_contents($_FILES['datei']['tmp_name']);
	#
	//Abfrage Dateitype:
	if($dateityp[2] != 0) { 
	#
	###	//IST == Datei =?= Angebe Byte
		if($_FILES['datei']['size'] < 31457280) { 
			#
			//Datei hochladen:
			move_uploaded_file($_FILES['datei']['tmp_name'], "".$Podloadpath."/".$Pod_name."".$Pod_dote."".$_POST["date"].".mp3");
			#
			//Info: Erfolgreich (1)
			echo "<div class='alert alert-info'>
			<h4>Hochladen der MP3-Datei war erfolgreich!</h4>
			Wurde gespeichert als: <a href='../../audio/".$Pod_name."".$Pod_dote."".$_POST["date"].".mp3'>(".$Pod_name."".$Pod_dote."".$_POST["date"].".mp3)</a> 
			</div>";
		}
		#	
		### //Info: Error 1
			else { echo "<div class='alert alert-error'>
							<h4>Fehler beim hochladen!</h4>
							Die MP3 Date darf nicht gr&ouml;ßer als 30MByte sein!
					</div>"; } 
	}
	#
	###	//Info: Error/Start 0
		else { echo "     "; }

####################################################### Save #####################################################
#
### Speichere in die Datenbank:
	#
	//Übergabe der Daten auf Form1 in Variablen:
	$DatumPodcastSave   = $_POST["date"];
	$HeaderPodcastSave  = $_POST["header"];
	$ContentPodcastSave = $_POST["content"];
		#
		//Datum auslesen: Fri, 10 Aug 2012 20:52:19 
		$timestamp = time(); 
		$DayPodcastSave = date("D, d M Y H:i:s", $timestamp);
		  #
########### 
#
# FormStart:
  echo '<form action="editor-save.php" method="post" enctype="multipart/form-data" id="SignupForm" class="well">';
	#
	### Inputs:
		 echo '<input style="display:none;" name="savedaytotime" value="'.$DayPodcastSave.'" type="text" />';
		  echo '<input style="display:none;" name="savedate" value="'.$DatumPodcastSave.'" type="text" />';
		   echo '<input style="display:none;" name="saveheader" value="'.$HeaderPodcastSave.'" type="text" />	';	
		 echo '<textarea style="display:none;" name="savecontent">'.$ContentPodcastSave.'</textarea>';
		#
		### Kurzübersicht:
		 echo '<h3>&Uuml;berschrift:</h3><div style="border:1px solid #aaa; background:#fff; padding:5px;">';
			echo $HeaderPodcastSave;
		   echo '</div><br>';
		   echo '<h3>Informationen:</h3><div style="border:1px solid #aaa; background:#fff; padding:5px;">';
			echo $ContentPodcastSave;
		 echo '</div><br />';
		#	
		### Speichern:
		 echo '<div style="float:left; margin-right:5px;"><a class="btn btn-danger btn-large" href="editor.php">Abbrechen</a></div>
		 <input type="submit" class="btn btn-success btn-large" value="Jetzt diese Episode speichern" />'; /*
			#
#FormEnd: #*/
 echo '</form>';
#
###################################################### //Save #####################################################
?>