<?php
session_start();
include_once 'ressources/connexion.php';
include_once 'ressources/stock.class.php';
$idarticle = $_GET['id'];
$amountarticle = $_GET['amount'];
$name = $_GET['name'];
$price = $_GET['price'];

//CHECK AMOUNTS
$articlebdd = stock::getStockItem($connect,$idarticle);

settype($idarticle, "integer");
settype($amountarticle, "integer");
settype($price, "float");
$price = $price*$amountarticle;
$orderdetail = array('id'=>$idarticle,'amount'=>$amountarticle, 'nom'=>$name, 'price'=>$price);

$exist = true;
if(isset($_SESSION['orderlist'])){
	foreach ($_SESSION['orderlist'] as $list => $val) {
		if($val['id'] == $idarticle){
			if($articlebdd['amount'] > $val['amount']+$amountarticle){
				$val['amount'] = $val['amount']+$amountarticle ;
				$_SESSION['orderlist'][$list] = $val;
			}
			$exist = false;
		}
	}
}
if($exist){$_SESSION['orderlist'][] = $orderdetail;}
?>
<div class="panel panel-info" width="40px" >
<div class="panel-heading"><h3 class="panel-title" id="infostitre">Enregistré !</h3></div>
<div class="panel-body" id="informations">
	Pour voir sa commande ou la valider: <span onclick='javascript: $("#page").load("commande.php");' class="btn pull-right btn-xs btn-warning">Commande</span>
</div>
</div>
