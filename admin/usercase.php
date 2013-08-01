<?php
# Abfrage Session auf OK? =>(1)
session_start();
if(isset($_SESSION["username"])) {

#<!------------------------------Page---------------------------------------------->

/**
* # Header (include aus => lib/header.inc.php)
*
**/
include 'lib/header.inc.php';


/**
* # Editor (include aus => lib/content.inc.php)
*
**/
echo '<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">';
			include 'lib/user.content.inc.php';
echo '		</div>
		</div>
      </div>';


/**
* # Editor (include aus => lib/footer.inc.php)
*
**/
include 'lib/footer.inc.php';

#<!------------------------------PageEnd---------------------------------------------->





# Abfrage Session auf OK? (0)
/*

  Nicht Angemeldet? Weiterleitung zu einer beliebigen URL
  INFO: => siehe unter /RSS/-/inc/install.php

*/
// == (1)	=> OK(1)
// =/=(0) 	=> FEHLER(0/2)
} else {  
	// DANN 	=> Weiterleitung auf URL 
	include '../-/inc/install.php';
	include '../-/inc/error.php';
} 

?>