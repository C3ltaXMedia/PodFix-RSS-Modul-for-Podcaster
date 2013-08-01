<?php 
/**
* PodfixRSS by Michael McCouman jr.
* ---------------------------------
*
* @file Speichern "Neues Podcast - Erstellmodul"
* @copy Copyright(c) 2012 by Michael McCouman jr
* @contact E-Mail: michael.mccouman@gmail.com
*
*/


#Formular Bereich - Start:
echo '<form action="editor-content.php" method="post" enctype="multipart/form-data" id="SignupForm" class="well">';
	#
	#
	//Überschrift:
    echo '<fieldset>
		<!--Name-->
        <legend>Neues Podcasting:</legend>
		<label>&Uuml;berschrift:</label>
		<input name="header" class="span12" placeholder="&Uuml;berschrift der neuen Episode" type="text" />
		<!--//Name-->
		<!--Content-->
		<label>Content:</label>
		<textarea name="content" id="editor1" class="span12" rows="10" placeholder="Zusammenfassung der neuen Podcast-Episode..." ></textarea>
		<!--//Content-->		
		</fieldset>';
		#
		#
		//Datum für Dateiname:   
		echo '<fieldset>
            <legend>Datum vergeben:</legend><br>
			<p>Gebe hier ein Datum an!</p>
            <input name="date" class="span12" id="datepicker" type="text" />
			<br>
			 <br />
			<br>
			  <br />
			 <br>
			  <br />
        </fieldset>';
		#
		#
		//Hochlademodul MP3:	
		echo '<fieldset>
				<legend>Hochladen der MP3:</legend><br>
				<p style="color: #a00;">Bitte nur Datein im MP3 Format hochladen</p>
				<input name="datei" class="span12" type="file" />	 
				<br>
				<div style="margin-left:78px; margin-top: 35px; margin-bottom: -37px;">
					<input id="SaveAccount" type="submit" class="btn btn-inverse btn-large" value="Schritte 1-3 zusammenfassen und MP3 hochladen" />
				</div>					
			</fieldset>';		
						#
						#
#Formular Bereich - Ende:
echo '</form>';
?>