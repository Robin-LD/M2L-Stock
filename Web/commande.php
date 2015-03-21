<?php
session_start();
include_once 'ressources/connexion.php';
include_once 'ressources/stock.class.php';
?>
<script>
	$("#navbar li").click(function(){
		var a = $(this).attr('id');
		switch(a){
			case'menu':
				var page = 'menu.php';
				break ;
			case'listearticle':
				var page = 'listearticle.php';
				break;
			case'commande':
				var page = 'commande.php';
				break;
			case'historique':
				var page = 'historique.php';
				break;
			case'deco':
				var page = 'deconnexion.php';
				break;
		}
		$("#page").load(page);
	});

	$("span[name=delete]").click(function(){
		id = $(this).attr('ohmy');
		var url = 'articledelete.php?id='+id;
		$("#page").load(url);
	});
</script>
<ul class="nav nav-tabs" role="tablist" id="navbar">
        <li role="presentation" id="menu"><a>Menu</a></li>
        <li role="presentation" id="listearticle"><a>Liste Article</a></li>
        <li role="presentation" id="commande" class="active"><a>Commande</a></li>
        <li role="presentation" id="historique"><a>Historique</a></li>
        <li role="presentation" class="pull-right btn btn-danger" id="deco">Deconnexion</li>
</ul>

<div class="center-block inline col-sm-7" style="padding-top:1%;">
<div class="panel panel-info" width="40px">
	<div class="panel-heading"><h3 class="panel-title">Commande</h3></div>
	<table class="table" id="thetable">
		<thead>
	        <tr>
	            <th data-field="id">Nom</th>
	            <th>Nombre désiré</th>
	            <th data-field="price">Prix</th>
	            <th></th>
	        </tr>
    	</thead>
    	<?php 
    	if(isset($_SESSION['orderlist'])){
    		$list = $_SESSION['orderlist'];
    		$prixtotal = 0;
    		foreach ($list as $key=>$order) {
    			echo'<tr><td>'.$order['nom'].'</td><td>'.$order['amount'].'</td><td>'.$order['price'].' €</td><td><span role="presentation" class="pull-right btn btn-xs btn-danger" ohmy="'.$key.'" name="delete">Supprimer</span></td></tr>';
    			$prixtotal += $order['price'];
    		}
    	}
    	?>
    	<thread>
    		<tr>
	            <th></th>
	            <th></th>
	            <th></th>
	            <th><span class='pull-right'>Prix total: <?php echo $prixtotal; ?>€</span></th>
	        </tr>
    	</thread>
    </table>
</div>
</div>

<div class="center-block inline col-sm-4" style="padding-top:1%;"id='infopanel'>
</div>