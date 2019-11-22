/*
$_SERVER
$_FILES
$GLOBALS
$_PSOT
$_GET
$_COOKIE
$_SESSION

*/
<html>
<head>
<style>

#peeps{
	color:red
	
}
</style>
<head>

<body>


<?php 

	
		echo "Hello World - form:".$_SERVER['SERVER_SOFTWARE'];
		echo "<h1 id = 'peeps'>".$_SERVER['HTTP_HOST']."</h1>";
?>

<body>
<html>

