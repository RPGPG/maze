<html>
<head>
	<title>Maze RPG</title>
	<link rel="stylesheet" href="style.css?version=1">
</head>
<body>
	<?php
	session_start();

	if(isset($_POST['WARR_BUT'])){								#Button functions
		$_SESSION['class'] = 'Warrior';
		$_SESSION['action'] = 'story';
	}

	if(isset($_POST['MAGE_BUT'])){
		$_SESSION['class'] = 'Mage';
		$_SESSION['action'] = 'story';
	}

	if(isset($_POST['THIEF_BUT'])){
		$_SESSION['class'] = 'Thief';
		$_SESSION['action'] = 'story';
	}

	if(isset($_POST['REST_BUT'])){
		$_SESSION['HP'] = $_SESSION['MAX_HP'];
	}

	if(isset($_POST['EXPL_BUT'])){
		$_SESSION['expl_value'] = rand(0, 10);
	}

	if($_SESSION['action'] == 'class_choose'){					#Choosing class warrior/mage/thief
		echo '
		<center>
		<div class="header">
			<p><font style="font-family: "Fantasy Clipart"; font-size: 50;">I</font>Now you must choose your class:</p>
		</div>
		<br><br>
		<div>
			<form method="post">
			<input type="submit" value="Warrior" name="WARR_BUT">
			<br><br>
			<input type="submit" value="Mage" name="MAGE_BUT">
			<br><br>
			<input type="submit" value="Thief" name="THIEF_BUT">
			<br><br>
			</form>
		</div>
		</center>';
	}

	if($_SESSION['action'] == 'story'){							#Story, locations etc
		echo '
		<center>
		<div class="header">											<!--Stats-->
		Level: '.$_SESSION['lvl'].'<br>
		Experience: '.$_SESSION['exp'].'/'.$_SESSION['max_exp'].'<br>
		HP: '.$_SESSION['HP'].'/'.$_SESSION['MAX_HP'].'
		</div>
		</center>
		';
		if($_SESSION['location'] == 'd_s_campfire'){			#Campfire safe place
			echo '
			<center>
			<div class="header">
				<h1>Campfire</h1>
				<p>'.$_SESSION['d_s_campfire'].'</p>
			</div>
			<br><br>
			<div>
				<form method="post">
				<input type="submit" value="Explore the maze" name="EXPL_BUT">
				<br><br>
				<input type="submit" value="Rest" name="REST_BUT">
				<br><br>
				</form>
			</div>
			</center>';
		}
	}
	?>
</body>
</html>