<html>
<head>
	<title>Maze RPG</title>
	<link rel="stylesheet" href="style.css?version=1">
</head>
<body>
	<?php
	session_start();
	include('descriptions.php');

	$_SESSION['HP'] = 100;
	$_SESSION['MAX_HP'] = 100;
	$_SESSION['lvl'] = 1;
	$_SESSION['exp'] = 0;
	$_SESSION['max_exp'] = 100;
	$_SESSION['class'] = 0;
	$_SESSION['action'] = 'class_choose';
	$_SESSION['location'] = 'd_s_campfire';

	if(isset($_POST['PROLOGUE_BUT'])){
		header('location:prologue.php');
	}

	if(isset($_POST['START_BUT'])){
		header('location:game.php');
	}
	?>
	<center>
	<div class="header">
		<h1>Welcome to Maze<br></h1>
		<p>Here you will search for precious artifacts and fight strange monsters or your opponents.</p>
	</div>
	<br><br>
	<div>
		<form method="post">
		<input type="submit" value="Go" name="START_BUT">
		<br><br>
		<input type="submit" value="Prologue" name="PROLOGUE_BUT">
		<br><br>
		</form>
	</div>
	</center>
</body>
</html>