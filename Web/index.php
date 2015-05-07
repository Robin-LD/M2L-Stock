<?php 
       session_start();
?>
<HTML>
	<HEAD>
		<title>Maison des Ligues de Lorraine | Stock</title>
		<link rel="stylesheet" href="ressources/bootstrap-theme.min.css">
		<link rel="stylesheet" href="ressources/bootstrap.min.css">
		<script type="text/javascript" src="ressources/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="ressources/bootstrap.min.js"></script>
		<meta charset="UTF-8" />
		<style>
			body{
				background-color: #F3F3F3;
			}
		</style>
	</HEAD>
	<BODY>
		<div class="nav navbar-default" role="navigator"><h2 class="navbar-brand">M2L Stock Web Interface</h2></div>
		<?php
			if(!isset($_SESSION["userid"])){
				echo"<script>
						$(document).ready(function(){
						    $('#page').load('connexionform.php');
						});
					</script>";
			}
			else{
				echo"<script>
						$(document).ready(function(){
						    $('#page').load('menu.php');
						});
					</script>";
			}
		?>
		<div id="page">

		</div>
	</BODY>
</HTML>