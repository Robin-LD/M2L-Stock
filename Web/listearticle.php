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

	function loadinfo(id){
		var url = 'articleinfo.php?id='+id;
		$("#infopanel").load(url);
	}

	$("#thetable tr td span").click(function(){
		var amount = $(this).parents().children("td[name=tdquan]").children().val();
		var id = $(this).attr('ohmy');
		var nom = $(this).parents().children("td[name=nom]").html();
		var price = $(this).parents().children("td[name=prix]").html().slice(0,-1);
		var url = "articleorder.php?id="+id+"&amount="+amount+"&name="+nom+"&price="+price;
		$("#infopanel").load(url);
	})
</script>
<ul class="nav nav-tabs" role="tablist" id="navbar">
        <li role="presentation" id="menu"><a>Menu</a></li>
        <li role="presentation" id="listearticle" class="active"><a>Liste Article</a></li>
        <li role="presentation" id="commande"><a>Commande</a></li>
        <li role="presentation" id="historique"><a>Historique</a></li>
        <li role="presentation" class="pull-right btn btn-danger" id="deco">Deconnexion</li>
</ul>

<div class="center-block inline col-sm-7" style="padding-top:1%;">
<div class="panel panel-info" width="40px">
	<div class="panel-heading"><h3 class="panel-title">Listes des articles</h3></div>
	<table class="table" id="thetable">
		<thead>
	        <tr>
	            <th data-field="id">Nom <span class="text-info" style="font-size: small;">(i)click</span></th>
	            <th data-field="name">Disponibles</th>
	            <th>Nombre désiré</th>
	            <th data-field="price">Prix</th>
	            <th><th>
	        </tr>
    	</thead>
    	<?php 
    		$stocklist = stock::getStockList($connect);
    		while($row = mysqli_fetch_array($stocklist)){
    			echo '<tr><td name="nom" onclick="javascript:loadinfo('.$row['id'].')">'.$row['nom'].'</td><td>'.$row['amount'].'</td><td name="tdquan"><input type="number" value="1" name="quantity" min="1" max="'.$row['amount'].'"></input></td><td name="prix">'.$row['price'].' €</td><td class="pull-right"><span ohmy="'.$row['id'].'" class="btn pull-right btn-success">Acheter</span></td></tr>';
    		}
    	?>
    </table>
</div>
</div>

<div class="center-block inline col-sm-4" style="padding-top:1%;"id='infopanel'>
</div>