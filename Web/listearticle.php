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
</script>
<ul class="nav nav-tabs" role="tablist" id="navbar">
        <li role="presentation" id="menu"><a>Menu</a></li>
        <li role="presentation" id="listearticle" class="active"><a>Liste Article</a></li>
        <li role="presentation" id="commande"><a>Commande</a></li>
        <li role="presentation" id="historique"><a>Historique</a></li>
        <li role="presentation" class="pull-right btn btn-warning" id="deco">Deconnexion</li>
</ul>

<div class="center-block inline col-sm-7" style="padding-top:1%;">
<div class="panel panel-info" width="40px">
	<div class="panel-heading"><h3 class="panel-title">Bienvenue !</h3></div>
	<table class="table">
		<thead>
	        <tr>
	            <th data-field="id">Nom</th>
	            <th data-field="name">Disponibles</th>
	            <th data-field="price">Prix</th>
	            <th><th>
	        </tr>
    	</thead>
    	<?php 
    		$stocklist = stock::getStockList($connect);
    		while($row = mysqli_fetch_array($stocklist)){
    			echo '<tr><td>'.$row['nom'].'</td><td>'.$row['amount'].'</td><td>'.$row['price'].' €</td><td class="pull-right"><span class="btn btn-success">Acheter</span></td></tr>';
    		}
    	?>
    </table>
</div>
</div>

<div class="center-block inline col-sm-4" style="padding-top:1%;">
<div class="panel panel-info" width="40px">
	<div class="panel-heading"><h3 class="panel-title">Vos informations</h3></div>
	<div class="panel-body">
		Integer sit amet lorem diam. Curabitur condimentum, leo id condimentum convallis, justo sem facilisis erat, non convallis nulla odio vitae orci. Nunc sed tempus leo. Sed quis condimentum lectus. Integer hendrerit, mauris sagittis pretium pretium, enim sapien vestibulum diam, vulputate cursus leo diam euismod libero. Donec accumsan laoreet diam ut sagittis. Sed lobortis felis sed rutrum pulvinar. Ut congue massa purus, ut mattis ligula maximus et.

		Nunc consectetur fermentum neque, in eleifend est suscipit ac. Vestibulum euismod nisl et est iaculis, non mollis velit pretium. Vivamus aliquam, elit in mattis bibendum, lectus arcu dignissim ligula, hendrerit blandit ex arcu eget augue. Proin quis congue ante. Duis auctor mollis commodo. Etiam maximus elementum turpis at sollicitudin. Praesent non euismod felis. Cras at nunc mi. Sed tempus orci id velit ultricies, et posuere mi venenatis. Aenean erat ante, luctus quis luctus in, rhoncus eget libero. Ut viverra massa elit, eget finibus purus malesuada tincidunt. Fusce sagittis, turpis vehicula posuere volutpat, sapien lectus mattis velit, fermentum faucibus tortor nisl et tellus. Donec gravida interdum scelerisque. Donec vel tortor ornare, malesuada ipsum vel, pellentesque neque. In id augue dictum enim iaculis dignissim. Etiam condimentum metus pellentesque justo ultrices, eget consequat magna varius.	
	</div>
</div>
</div>