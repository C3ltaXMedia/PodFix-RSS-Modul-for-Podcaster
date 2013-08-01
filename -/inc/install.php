<?php
######################################## Settings Downloader #################################
#
### Name der Podcast-Datei
	//Podcast Prefix/Abkürzung:
	//Beispiel: Max Podcast 
	//=> MP.<ErstellungsDatum>.mp3
	#
	$Pod_name 	 = 'WBF';
#	
### Podcast Unterbrechung
	//Beispiel: 
	//=> MP.<Datum>.mp3 (MP.12062012.pm3)
	//Oder: 
	//=> MP-<Datum>.mp3 (MP-12062012.pm3)
	#
	$Pod_dote 	 = '.';
#	
### Podcast Audio-Ordner
	//Gebe hier den Serverpfad zum Ordner ein, 
	//in dem deine Podcast gespeichert werden sollen:
	#
	$Podloadpath = '/var/www/RSS/audio';  

################################################### Errorpage ###########################################
#
### Errornachricht:
	//Angaben zur Weiterleitung:
	#
	$errortime  = '2'; 								//Zeit der Weiterleitung
	$errorurl	= 'http://google.com'; 				//URL der Weiterleitung
	#
	### Massage:
		#
		$errorinfo	= 'Errorpage Weiterleitung<br>
		Nach 5mSek auf http://google.com<br><br>
		<a href="./login">Login</a>';				//Error Nachricht

################################################## Feedeinstellungen #####################################	
#
### Variablen:
	//Vergebe hier einen direkten Namen für das Adminpanel:
	#
	$Projektname 	= 'PodfixRSS Admin';									//Name deines Adminbordes
	
#
### RSS Feed:
	//Die folgenden Angaben sind für dein Podcast sehr wichtig!
	//Hier werden die öffentlichen Informationen für dein Podcast
	//festgelegt:
	#
	$Podcastname 	= 'MAX Podcast';  										//Podcastname
	$PodSubtitle	= 'Ein starker Podcast mit Medien';						//Podcast Untertitel
	$PodLanguarge	= 'de-de';												//Sprache
	$PodCopyright	= 'CC-BY-CN';											//Lizenz
	$PodAuthor		= 'Max Mustermann';										//Autor
	$PodcastMail	= 'max.mustermann@gmail.com';							//E-Mail des Autors
	$Podcastlink	= 'http://<meine domain.dlt>';							//Podcast Weblink
	$Podcastimg 	= 'http://<meine domain.dlt>/RSS/audio/cover.jpg';		//Podcast Image
	$PodRSSimg		= 'http://<meine domain.dlt>/RSS/audio/rss.jpg';		//Podcast Feed Image
	$Inhaltex 		= 'no/yes'; 											//Inhalt Explizit
	
#
### Information zum Podcast:
	//Description, schreibe hier eine kurze Zusammenfassung
	//zu deinem Podcast:
	#
	$PodDescript	= 'Hier kommt eine kurze Zusammenfassung zum Podcast hinein!';
?>