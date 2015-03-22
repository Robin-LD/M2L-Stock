<?php
	session_start();
	$idorder = $_GET['id'];
	unset($_SESSION['orderlist'][$idorder]);
?>
<script>
	$(document).ready(function(){
	    $('#page').load('commande.php');
	});
</script>