<?php
session_start();
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
        <li role="presentation" id="menu" class="active"><a>Menu</a></li>
        <li role="presentation" id="listearticle"><a>Liste Article</a></li>
        <li role="presentation" id="commande"><a>Commande</a></li>
        <li role="presentation" id="historique"><a>Historique</a></li>
        <li role="presentation" class="pull-right btn btn-warning" id="deco">Deconnexion</li>
</ul>

<div class="center-block inline col-sm-7" style="padding-top:1%;">
<div class="panel panel-info" width="40px">
	<div class="panel-heading"><h3 class="panel-title">Bienvenue !</h3></div>
	<div class="panel-body">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui est, sollicitudin non tellus at, dignissim dapibus dolor. Nunc et pulvinar nibh. Proin luctus iaculis nisi a vehicula. Aenean vestibulum velit justo, vitae mollis sem finibus at. Maecenas non condimentum lacus. Aenean eu leo at diam elementum lacinia. Praesent suscipit luctus lacus eget commodo.

		Pellentesque vel tempus nunc. Duis in placerat dui. Sed quis ullamcorper metus. Integer sit amet lorem diam. Curabitur condimentum, leo id condimentum convallis, justo sem facilisis erat, non convallis nulla odio vitae orci. Nunc sed tempus leo. Sed quis condimentum lectus. Integer hendrerit, mauris sagittis pretium pretium, enim sapien vestibulum diam, vulputate cursus leo diam euismod libero. Donec accumsan laoreet diam ut sagittis. Sed lobortis felis sed rutrum pulvinar. Ut congue massa purus, ut mattis ligula maximus et.

		Nunc consectetur fermentum neque, in eleifend est suscipit ac. Vestibulum euismod nisl et est iaculis, non mollis velit pretium. Vivamus aliquam, elit in mattis bibendum, lectus arcu dignissim ligula, hendrerit blandit ex arcu eget augue. Proin quis congue ante. Duis auctor mollis commodo. Etiam maximus elementum turpis at sollicitudin. Praesent non euismod felis. Cras at nunc mi. Sed tempus orci id velit ultricies, et posuere mi venenatis. Aenean erat ante, luctus quis luctus in, rhoncus eget libero. Ut viverra massa elit, eget finibus purus malesuada tincidunt. Fusce sagittis, turpis vehicula posuere volutpat, sapien lectus mattis velit, fermentum faucibus tortor nisl et tellus. Donec gravida interdum scelerisque. Donec vel tortor ornare, malesuada ipsum vel, pellentesque neque. In id augue dictum enim iaculis dignissim. Etiam condimentum metus pellentesque justo ultrices, eget consequat magna varius.

		Phasellus porttitor turpis eu nisi porta, in imperdiet nisi hendrerit. Integer venenatis ligula nunc, eu mollis nulla dapibus eu. Aliquam erat volutpat. Duis feugiat rutrum elit, nec finibus eros bibendum non. Aenean finibus mattis elit, ut ornare ex finibus vel. Aenean bibendum vehicula vestibulum. Nam diam ante, mattis non malesuada id, venenatis quis augue. Duis vestibulum sem enim, eu ornare odio egestas at.

		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod dui vitae diam molestie, at congue elit consectetur. Vivamus in tortor suscipit dolor rutrum varius. Integer maximus nisl ut nisi porta euismod. Integer fermentum luctus dolor ut lacinia. Curabitur commodo, elit id aliquet consectetur, nunc lorem venenatis ante, eget congue neque erat ultrices sapien. Morbi porttitor sem id tellus posuere, nec malesuada libero rutrum. Nullam laoreet maximus fringilla. Nulla nec vestibulum enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sit amet magna ut diam maximus laoreet. Aliquam erat volutpat. Integer elementum nisi quam, non bibendum est cursus sit amet. In bibendum vulputate neque, non egestas lorem.
	</div>
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