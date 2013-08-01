<?php
########################
#
#   Adminpage Header
#

include '../-/inc/install.php';

?>
<html>
<head>
<title>Podfix-RSS Editor</title>
<meta content="text/html; charset=utf-8" http-equiv="content-type" />
<meta http-equiv='refresh' content='2; URL=usercase.php' />
<link href="lib/css/datum.css" rel="stylesheet">
	<link href="lib/css/bootstrap.css" rel="stylesheet" />
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
		</style>
	<link href="lib/css/bootstrap-responsive.css" rel="stylesheet">
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
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
          <a class="brand" href="./usercase.php"><?php echo ''.$Projektname.''; ?></a>
		  
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> <?php echo $_SESSION["username"]; ?>
              <span class="caret"></span>
            </a>
				<ul class="dropdown-menu">
				  <li><a href="./logout">Auslogen</a></li>
				</ul>
          </div>
		  
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="./usercase.php">Home</a></li>
              <li><a href="./editor.php">Hinzuf&uuml;gen</a></li>
              <li><a href="#">...</a></li>
            </ul>
          </div>
		<!--//container-fluid-->
        </div>
	<!--//navbar-inner-->	
    </div>
<!--//navbar-->
</div>
<!------------------//UserpanelEnd--------------------->