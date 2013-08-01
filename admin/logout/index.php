<?php
session_start();
session_destroy();
?>
<html>
	<head>
	<title>Logout</title>
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
	<meta http-equiv="refresh" content="3; URL=../login/" />
	
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
			
		<h1>Logout</h1>
		<br>
			<p>
				Du hast dich erfolgreich ausgeloggt
			</p>
		<br>
			<p>	
				<a href='../login/' class="btn btn-danger btn-large">Anmelden</a>
			</p>
					
				

		</div><!--span12-->
	</div><!--Row.fluid-->
</div><!--Row.fluid.container-->
</body>
</html>