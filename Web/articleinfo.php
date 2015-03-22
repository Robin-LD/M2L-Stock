<?php
session_start();
include_once ('ressources/connexion.php');
include_once 'ressources/stock.class.php';
$id = $_GET['id'];
settype($id, "integer");
$itemresult = stock::getStockItem($connect,$id);
$item = mysqli_fetch_array($itemresult);
?>

<div class="panel panel-info" width="40px" >
<div class="panel-heading"><h3 class="panel-title" id="infostitre"><?php echo $item['nom'];?></h3></div>
<div class="panel-body" id="informations">
	<?php echo $item['price'];?>
</div>
</div>