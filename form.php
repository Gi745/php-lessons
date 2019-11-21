<html>
<head>

<head>

<body>


<?php 

	$GoodBoy = "hello world";
		echo $GoodBoy;
		echo "<h1 id = 'peeps'>".$GoodBoy. "</h1>";
?>

<form action="runGet.php" method="get">
Name:<input type="text" name="name"> <br>
E-mail: <input type="text" name="email"> <br>
<input type="submit" value ="Get">
</form>
<form action="runPost.php" method="post">
Name:<input type="text" name="name"> <br>
E-mail: <input type="text" name="email"> <br>
<input type="submit" value ="Post">
</form>
<body>
<html>
