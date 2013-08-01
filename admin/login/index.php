<?php
# Starte Cookiesession
session_start();

# Einbindung der Datenbank
include '../../-/inc/db.inc.php';


# Übergebe Variable zum Verhalten 0 (nicht angemeldet)
$verhalten = 0;

/* 
	Cookie vorhanden? Das ist der Fall wenn: 
	-----------------------------------------------
	? WENN "benutzername" UND "get" nicht vergeben, 
	! DANN ist immer Verhalten "0":
*/
# Prüfe ob Cookie vergeben!
if(!isset($_SESSION["username"]) and !isset($_GET["page"])) { 
		$verhalten = 0; 
	}
	
	# WENN "get" vergeben DANN IST GLEICH immer "log"
	if($_GET["page"] == "log") {

	# Setze Eingaben um von "post":
	// Wandel die Eingaben "user" in 
	// Kleinschreibweise um:
	$user = $_POST["user"];
	
	// Wandel das Passwort in md5 um 
	// und verschlüssel:
	$passwort = md5($_POST["passwort"]);

		# Verbinde dich mit der Datenbank nach den Angeben hier: 
		//
		// INFO: Es muss eine DB eingetragen Sein unter:
		// <Server-root/www/RSS/>Administer23456789/inc/db.inc.php
		//
		$verbindung = mysql_connect("$SQLhost", "$SQLuser", "$SQLpass") or
			
			# (1) ERROR: 
			# Keine Rückmeldung der DB Verbindung?
			// Gebe hier eine Fehlermeldung aus:
			die ("
			<html>
			<head>
			<title>Login nicht möglich!</title>
				<link rel='stylesheet' type='text/css' href='css/demo.css' />
			
			</head>
				<body>
			
			Leider haben wir zur Zeit technische Probleme!
			
			</body>
			</html>");

		# Wenn Angaben ok, verbinde dich mit DB
		mysql_select_db("$SQLhostdb") or
				
			# (2) ERROR: 
			# Keine Rückmeldung der Datenbank?
			// Gebe hier eine Fehlermeldung aus:
			die ("
			<html>
			 <head>
				<title>Login nicht möglich!</title>
				<link rel='stylesheet' type='text/css' href='css/demo.css' />
			 </head>
			<body>
		
		Anmeldung nicht möglich
		
			</body>
			</html>");
			
		# Kontrolle der Session "0" 
		// schauen ob Angeben in der DB zu finden sind:	
		$control = 0;	

			# Frage DB ob Nutzer mit den Angaben des Cookies vorhanden ist: 
			$abfrage = "SELECT * FROM login WHERE user = '$user' AND passwort = '$passwort'";
		
			# Abfrage aus DB nach Angaben:
			$ergebnis = mysql_query($abfrage);
		
			# Übergebe Anfrage des Ergebnis zur Überprüfung:
			while($row = mysql_fetch_object($ergebnis)) {	
				
				# Ist Angebe ok? 
				# Dann erhöhe Kontrolle um eins (+1)
				$control++;
			}	

				# Ist Kontrolle nicht GLEICH 0?
				if($control != 0) {
				
					# Dann übergebe Cookie:
					// das Verhalten (Session) mit der Angabe (Nutzername) 
					$_SESSION["username"] = $user;
					    
						# Session als Verhalten 1
						$verhalten = 1;
					} 
					
					# IST NICHT:
					else {
					
						# Sind Angaben nicht ok, 
						// vergebe Verhalten mit 2:
						$verhalten = 2;
					}
	}
?>
<html>
<head>
	<title>PodfixRSS - Login</title>
	<link href="../lib/css/bootstrap.css" rel="stylesheet" />
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
		</style>
	<link href="../lib/css/bootstrap-responsive.css" rel="stylesheet">
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<?php 

	# Wenn Abfrage mit Verhalten 1(OK):
	// Dann => Weiterleitung 
	// (Systemseite Nutzer ist dabei angemeldet)
	if($verhalten == 1) 
	
		# Gebe den Metatag zur Weiterleitung aus:
		// Weiterleitung Entspricht dem Login des Administers:
		echo "<meta http-equiv='refresh' content='3; URL=../editor.php' />"	
		
?>
</head>
<body>
<!------------------Userpanel------------------------->
<!--navbar-->
<div class="navbar navbar-fixed-top">
	<!--navbar-inner-->	
    <div class="navbar-inner">
		<!--container-fluid-->
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./usercase.php">PodfixRSS</a>
		  
          <div class="nav-collapse">
            <ul class="nav">
				<li><a href="./index.php">Anmelden</a></li>
				<li><a href="../">Abbrechen</a></li>
            </ul>
          </div>
		<!--//container-fluid-->
        </div>
	<!--//navbar-inner-->	
    </div>
<!--//navbar-->
</div>
<!------------------//UserpanelEnd--------------------->
<div class="container-fluid">
<div class="row-fluid">
	<div class="span12">
<?php 
	# Ist das Verhalte GLEICH (0):
	// DANN = Anmeldeliste
	if($verhalten == 0) {
	
	/**
	*
	*	Anmeldung Ausgabe (0):
	*
	*/
?>
<form method="post" action="?page=log" autocomplete="on" class="well">
<center>
	<h1>Anmeldung</h1>
	<div style="max-width: 550px; text-align: justify; padding-top:15px; padding-bottom:10px; padding-left:35px; padding-right:35px;">
	<p>
	Willkommen auf PodfixRSS dem Feedgenerator zum einfachen erstellen von Podcastings. 
	Bitte melde dich mit deinem Administratoren-Konto an, um PodfixRSS nutzen zu können.
	</p>
	</div>	
	<hr />
	<!--<label> Benutzername: </label>-->
	<input class="span5" type="text" name="user" required="required" placeholder="Benutzer"/>
	<!--<label> Passwort: </label>-->
	<input class="span5" type="password" name="passwort" required="required" placeholder="X8df!90EO" /> 
	<?php 
		
	//row
	echo '<hr />';
	
	// Zurück/Abbrechen 
	echo '<a href="../" class="btn btn-danger btn-large" >Abbrechen</a>';
		
	//middle
	echo '<span style="margin-left:160px;"> </span>';
	
	// Einlogbutton 
	echo '<input class="btn btn-success btn-large" type="submit" value="Einloggen" />';
	//rowend
	echo '</center>
	</form>';
	
//Anmeldungsbereich Ende
}   
#<!----------------------------------------------------//Anmelden------------------------------------->
?>



<?php

	# Entsprechen die Angaben GLEICH 1 = OK
	if($verhalten == 1) {
	
	/**
	*
	*	Anmeldung OK! Ausgabe - INFO(1):
	*
	*/
?><div class="well">
<center>
	<h1>Anmeldung Erfolgreich</h1>
	<hr />
		<div class="alert alert-success">
		<b>Du hast dich erfolgreich eingeloggt</b> und wirst nun weitergeleitet...
		</div>
	<hr />
</center>
</div>
<?php  }  // Meldung OK! Ausgabe - INFO(1) ENDE ?>

<?php
	# Ist Verhalten GLEICH (2)
	//DANN =/= Nicht OK
	//Entspricht dem Wert von Session(0)
	if($verhalten == 2) {
		
	/**
	*
	*	Anmeldung FEHLER! Ausgabe - INFO(2):
	*
	*/
?><div class="well">
	<center>
	<h1>Anmelden nicht möglich!</h1>
		<hr />
		<div class="alert alert-error">
		 <h3>Deine Eingaben waren leider nicht korrekt :(</h3>
			<p>Vielleicht hast du einen falschen Benutzernamen oder Passwort eingegben?
			Bitte versuche es noch einmal um dich anmelden zu können.</p>
		</div>
		<hr />
		<a class="btn btn-warning btn-large" href="./">Noch einmal versuchen?</a>
	</center>
</div>
<?php }	//Meldung FEHLER! Ausgabe - INFO(2) ENDE ?>

		</div><!--span12-->
	</div><!--Row.fluid-->
</div><!--Row.fluid.container-->
</body>
</html>