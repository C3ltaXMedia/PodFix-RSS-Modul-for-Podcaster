<?php
# Footer
?>
 <script src="lib/js/jquery.js"></script>
 
 <script src="lib/js/jquery.ui.core.js"></script>
 <script src="lib/js/jquery.ui.widget.js"></script>
 <script src="lib/js/jquery.ui.datepicker.js"></script>
 
 <script type="text/javascript">
	/*$(function() {
		$( "#datepicker" ).datepicker();
		
		
	});*/
	
	
	
	if($('#datepicker').length>0) {
    	$('#datepicker').datepicker({
		dateFormat: 'ddmmyy',
    	monthNames: ['Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember'],
    	dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag','Samstag'],
		dayNamesMin: ['So', 'Mo', 'Die', 'Mi', 'Do', 'Fre', 'Sa']
    	});
    }
		
</script>
	
	
 <script src="lib/js/bootstrap-transition.js"></script>
 <script src="lib/js/bootstrap-alert.js"></script>
 <script src="lib/js/bootstrap-modal.js"></script>
 <script src="lib/js/bootstrap-dropdown.js"></script>
 <script src="lib/js/bootstrap-scrollspy.js"></script>
 <script src="lib/js/bootstrap-tab.js"></script>
 <script src="lib/js/bootstrap-tooltip.js"></script>
 <script src="lib/js/bootstrap-popover.js"></script>
 <script src="lib/js/bootstrap-button.js"></script>
 <script src="lib/js/bootstrap-collapse.js"></script>
 <script src="lib/js/bootstrap-typeahead.js"></script>

 <script type="text/javascript" src="lib/js/formToWizard.js"></script>
 <script type="text/javascript">
  $(document).ready(function(){
    $("#SignupForm").formToWizard({ 
		submitButton: 'SaveAccount' 
	})
  });
 </script>


</body>
</html>