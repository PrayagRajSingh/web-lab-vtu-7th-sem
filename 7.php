<!DOCTYPE HTML>
<html>
   <head>
		<meta http-equiv="refresh" content="1">
		<title>Digital Clock</title>
		<style type="text/css">
			h1{text-align:center;
			background-color:black; color:white;}
		</style>
	</head>
<body>
   <?php
	echo "<h1>Digital Clock</h1>";
	echo "<hr/>";
	date_default_timezone_set('Asia/Kolkata');
	echo "<h1>".date('d-m-Y H:i:s a')."</h1>";
	echo "<hr/>";
   ?>
</body>
</html>