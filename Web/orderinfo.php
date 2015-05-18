<?php
session_start();
include_once ('ressources/connexion.php');
include_once 'ressources/order.class.php';
$id = $_GET['id'];
settype($id, "integer");
$items = order::details($connect,$id);
?>

<div class="panel panel-info" width="40px" >
<div class="panel-heading">
	<h3 class="panel-title" id="infostitre">Details de la commande:</h3>
</div>
<div class="panel-body" id="informations">
<table class="table" data-click-to-select='true'>
	<thread>
		<tr>
			<th>Nom</th>
			<th>Quantité</th>
			<th>Prix</th>
		<tr>
	</thread>
	<?php 
		foreach($items as $item){
			echo"<tr>
					<td>".$item['nom']."</td>
					<td>".$item['amount']."</td>
					<td>".$item['price']." €</td>	
				</tr>";
		}
	?>
</table>
</div>
</div>