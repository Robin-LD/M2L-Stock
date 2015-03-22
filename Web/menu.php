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
        <li role="presentation" class="pull-right btn btn-danger" id="deco">Deconnexion</li>
</ul>

<div class="center-block inline col-sm-7" style="padding-top:1%;">
<div class="panel panel-info" width="40px">
	<div class="panel-heading"><h3 class="panel-title">Bienvenue !</h3></div>
	<div class="panel-body">
			Bienvenue sur la plateforme web du stock de la maison des ligues de Lorraine.
			Grâce à votre compte fournis par mail depuis la maison des ligues, vous avez accès au stock et aux articles proposés.
			Choisissez vos articles (et le nombre désiré), ensuite vous pourrez inspecté votre commande et la valider.
			Chaque mois la facture du total des commandes d'un club sera envoyer au gérant de ce même club.
	</div>
</div>
</div>

<div class="center-block inline col-sm-4" style="padding-top:1%;">
<div class="panel panel-info" width="40px">
	<div class="panel-heading"><h3 class="panel-title">Vos informations</h3></div>
	<div class="panel-body">
		<?php
			include_once('ressources/connexion.php');
			$id = $_SESSION['id'];
			$userinfo = getUserbyId($id,$connect);
			$infos = mysqli_fetch_array($userinfo);
			echo  '<label>Nom:</label> '.$infos['username'].'<br /><label>Email:</label> '.$infos['email'].'<br /><label>Adresse:</label> '.$infos['adress'];
		?>
		</div>
</div>
</div>