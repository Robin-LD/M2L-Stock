<?php
session_start();
include_once 'ressources/connexion.php';
include_once 'ressources/stock.class.php';
include_once 'ressources/order.class.php';
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

	function valid(){
		$("#myModal").load('ordervalid.php');
	}

	function detailed(id){
		$("#infopanel").load('orderinfo.php?id='+id);
	}
</script>
<ul class="nav nav-tabs" role="tablist" id="navbar">
        <li role="presentation" id="menu"><a>Menu</a></li>
        <li role="presentation" id="listearticle"><a>Liste Article</a></li>
        <li role="presentation" id="commande"><a>Commande</a></li>
        <li role="presentation" id="historique" class="active"><a>Historique</a></li>
        <li role="presentation" class="pull-right btn btn-danger" id="deco">Deconnexion</li>
</ul>

<div class="center-block inline col-sm-7" style="padding-top:1%;">
<div class="panel panel-info" width="40px">
	<div class="panel-heading"><h3 class="panel-title">Historique</h3></div>
	<table class="table" id="thetable">
		<thead>
	        <tr>
	            <th data-field="id">Numéro<span class="text-info" style="font-size: small;">(i)click</span></th>
	            <th>Date</th>
	            <th data-field="price">Prix Total</th>
	            <th>Statut</th>
	        </tr>
    	</thead>
    	<?php 
    		$historylist = order::history($connect, $_SESSION['userid']);
    		while($array = mysqli_fetch_array($historylist)){
    			echo"
    			<tr onclick='javascript:detailed(".$array['id'].")'>
    				<td>".$array['id']."</td>
    				<td>".$array['date']."</td>
    				<td>".$array['price']."€</td>";

    			if($array['status'] == 1){echo"<td>En cours</td>";}
    			if($array['status'] == 2){echo"<td>Envoyé</td>";}
    			if($array['status'] == 3){echo"<td>Annulé</td>";}

    			echo"</tr>";
    		}

    	?>
    </table>
</div>
</div>

<div class="center-block inline col-sm-4" style="padding-top:1%;"id='infopanel'>
</div>