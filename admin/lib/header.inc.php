<?php
########################
#
#   Adminpage Header
#

include '../-/inc/install.php';

?>
<html>
<head>
<title>PodfixRSS Editor</title>
<meta content="text/html; charset=utf-8" http-equiv="content-type" />
<link href="lib/css/userinterface.css" rel="stylesheet" />
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
    <style type="text/css">    
        #header { text-align:center; border-bottom:solid 1px #b2b3b5; margin: 0 0 20px 0; }
        fieldset { border:none; }
        legend { font-size:18px; margin:0px; padding:10px 0px; color:#b0232a; font-weight:bold;}
        label { display:block; margin:15px 0 5px;}
        input[type=text], input[type=password] { width:300px; padding:5px; border:solid 1px #000;}
        .prev, .next { background-color:#b0232a; padding:5px 10px; color:#fff; text-decoration:none;}
        .prev:hover, .next:hover { background-color:#000; text-decoration:none;}
        .prev { float:left;}
        .next { float:right;}
        #steps { list-style:none; width:100%; overflow:hidden; margin:0px; padding:0px;}
        #steps li {font-size:24px; float:left; padding:10px; color:#b0b1b3;}
        #steps li span {font-size:11px; display:block;}
        #steps li.current { color:#000;}
        #makeWizard { background-color:#b0232a; color:#fff; padding:5px 10px; text-decoration:none; font-size:18px;}
        #makeWizard:hover { background-color:#000;}
    </style>
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