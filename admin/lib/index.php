<?php
session_start();
if(isset($_SESSION["username"])) {
?>
<html>
<head>
	<meta http-equiv='refresh' content='0; URL=../editor.php' />
</head>
<body>
<h1>Lade... einen Monent bitte!</h1>
</body>
</html>
<?php
/*

  Nicht Angemeldet? Meldung hier für das Anmelden oder Registrieren:

*/
} else { 

include '../-/inc/install.php';
include '../-/inc/error.php';

} ?>