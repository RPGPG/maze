<html>
<head>
	<title>Maze RPG</title>
	<link rel="stylesheet" href="style.css?version=1">
</head>
<body>
	<?php
	session_start();

	if(isset($_POST['BACK_BUT'])){
		header('location:index.php');
	}
	?>
	<center>
	<div class="header">
		<p>You are hero, who lost all family and friends in a war. The war ended, but now you haven't anyrhing to live for.<br>
		You seek for new life, and you decide to go into the strange maze outside your village.<br>
		<font style="font-family: 'Fantasy Clipart'; font-size: 50;">L</font>Maybe you will find something what could change your destiny? Or you will just die with glory?<font style="font-family: 'Fantasy Clipart'; font-size: 50;">M</font>
		</p>
	</div>
	<br><br>
	<div>
		<form method="post">
		<input type="submit" value="Back" name="BACK_BUT">
		<br><br>
		</form>
	</div>
	</center>
</body>
</html>