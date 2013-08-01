<html>
<head>
	<title>WikiSky Registrieren</title>
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body>
<br>
<br>
 <div class="container">
<section>				
    <div id="container_demo">
		<a class="hiddenanchor" id="toregister"></a>
		<a class="hiddenanchor" id="tologin"></a>
	<div id="wrapper">

<!----------------------------------------------------Registrieren------------------------------------->
	<div id="login" class="animate form"> 
<?php
	
		# Überprüfe noch einmal ob eine Anmeldungssession 
		# in der Zwischenzeit vorhanden ist:
		
		if(!isset($_GET["page"])) {
	
?>
	
	<form action="register?page=2" method="post" autocomplete="on"> 
                <h1> Registrieren </h1> 
                <p> 
                    <label for="usernamesignup" class="uname" data-icon="u">Dein Benutzername</label>
                    <input id="usernamesignup" name="user" required="required" type="text" placeholder="mysuperusername690" />
                </p>
				
                <!--<p> 
                    <label for="emailsignup" class="youmail" data-icon="e" > Deine E-Mail</label>
                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                </p>-->
                <p> 
                    <label for="passwordsignup" class="youpasswd" data-icon="p">Dein Passwort </label>
                    <input id="passwordsignup" name="pw" required="required" type="password" placeholder="eg. X8df!90EO"/>
               </p>
                <p> 
                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Wiederhole bitte dein Passwort </label>
                    <input id="passwordsignup_confirm"  required="required" type="password" name="pw2" placeholder="eg. X8df!90EO"/>
                </p>
                <p class="signin button"> 
					<input type="submit" value="Senden" />
				</p>
                <p class="change_link"> 
					
						<a href="../" class="to_register"> Abbrechen </a>
					
				<span ></span>
				<a href="./" class="to_register"> Jetzt Anmelden </a>
				</p>
<?php

}

?>





<?php



if(isset($_GET["page"])) {
	if($_GET["page"] == "2") {
	$user = strtolower($_POST["user"]);
	$pw = md5($_POST["pw"]);
	$pw2 = md5($_POST["pw2"]);
	
	if($pw != $pw2) {
		
		# Passwort stimmt nicht! 
		echo "<h1>Registrieren nicht möglich!</h1>
			<p>
				<b>Du hast zwei unterschiedliche Passwörter eingegeben!</b>
				<br>
				Bitte wiederhole deine Eingabe und gebe dabei dein Passwort 2x übereinstimmend ein!
			</p>
			<br>
				<p class='change_link'>
					<a href='register' class='to_register'> Noch mal Versuchen! </a>
				</p>";
	
	
	
	} else {
			# Verbindungsfehler zu SQL fehlgeschlagen:
			$verbindung = mysql_connect("localhost", "root", "vaxuramohoke")
			or die ("<html>
			<head>
			<title>Login nicht möglich!</title>
				<link rel='stylesheet' type='text/css' href='css/demo.css' />
				<link rel='stylesheet' type='text/css' href='css/style.css' />
				<link rel='stylesheet' type='text/css' href='css/animate-custom.css' />
			</head>
				<body>
			   <br>
			 <br>
			<div class='container'>
			 <br>
			  <br>
				<div id='wrapper'>
					<div id='login' class='animate form'>
						<h1>Anmelden nicht möglich!</h1>
						<br>
						<p>Leider haben wir zur Zeit technische Probleme...</p>
						<br>
						<p class='change_link'>	
						<a href='./' class='to_register'>Zurück zur Startseite</a>
						</p>
					</div>
				</div>
			</div>
			</body>
			</html>");
			
			mysql_select_db("SQLmeinetestDB") // DB hier
			
			# Keine Verbindung zur DB möglich:
			or die ("<html>
			 <head>
				<title>Login nicht möglich!</title>
				<link rel='stylesheet' type='text/css' href='css/demo.css' />
				<link rel='stylesheet' type='text/css' href='css/style.css' />
				<link rel='stylesheet' type='text/css' href='css/animate-custom.css' />
			 </head>
			<body>
			   <br>
			 <br>
			<div class='container'>
			 <br>
			  <br>
				<div id='wrapper'>
					<div id='login' class='animate form'>
						<h1>Anmelden nicht möglich!</h1>
						<br>
						<p>Leider haben wir zur Zeit technische Probleme...</p>
						<br>
						<p class='change_link'>	
						<a href='./' class='to_register'>Zurück zur Startseite</a>
						</p>
					</div>
				</div>
			</div>
			</body>
			</html>");
			
			$control = 0;		
			$abfrage = "SELECT user FROM login WHERE user = '$user'";
			$ergebnis = mysql_query($abfrage);
			while($row = mysql_fetch_object($ergebnis))
				{
					$control++;
				}	
			if($control != 0) {
				echo "	<h1>Benutzername vergeben!</h1>
						 
						<p> 
							<b>Der Benutzername ist leider schon vorhanden :/</b><br>
							Bitte suche dir einen anderen Benutzernamen aus um dich auf WikiSky zu registrieren.
						</p>
						  <br>
						<p class='change_link'>	
							<a href=\"register\">Einen anderen Benutzernamen wählen?</a>
						</p>
						";
			
			} else {
			$eintrag = "INSERT INTO login
			(user, passwort)

			VALUES
			('$user', '$pw')";

			$eintragen = mysql_query($eintrag);
			
			if($eintragen == true) {
				echo "<h1>Registrierung Erfolgreich!</h1>
						<p> <b>Vielen Dank für deine Mitarbeit! </b><br>
						Du kannst dich nun Anmelden und Wikis in der Suchmaschine eintragen ;)
						</p>
						<br>
						<p class='change_link'>	
							<a href=\"./\">Jetzt Anmelden</a>
						</p>
						";
			} else {
				echo "Fehler im System. Bitte versuche es später noch einmal...";
			}
			mysql_close($verbindung);
			}
	}
	}
}
?>
</div>
</div>
</div>
</section>
</div>
<!----------------------------------------------------//Registrieren----------------------------------->
</body>
</html>
