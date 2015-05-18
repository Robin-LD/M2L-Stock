<?php
session_start();
include_once 'ressources/connexion.php';
include_once 'ressources/order.class.php';

$orderlist = $_SESSION['orderlist'];

if(empty($_SESSION['orderlist'])){
	echo'
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			Commande vide!
			</div>
		    <div class="modal-body">
			    <span class="btn btn-warning btn-sm" data-dismiss="modal" aria-label="Close">Fermer</span>
		    </div>
		</div>
	</div>';
}
else{
	echo'
	<script>
		function refreshit(){
			$("#page").load("commande.php");
		}
	</script>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			Commande validée !
			</div>
		    <div class="modal-body">
			    <span class="btn btn-warning btn-sm" data-dismiss="modal" aria-label="Close" onclick="refreshit();">Fermer</span>
		    </div>
		</div>
	</div>';
}

order::register($connect, $orderlist, $_SESSION["userid"]);
unset($_SESSION["orderlist"]);

?>
