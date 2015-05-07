<?php
session_start();
include_once ('ressources/connexion.php');
if (isset($_POST['envoyer'])) {
    $findquery = "Select * from user where email = '" . $_POST['email'] . "'";
    $findresult = mysqli_query($connect, $findquery);
    $resultrow = mysqli_fetch_array($findresult);
    if ($resultrow['password'] == $_POST['password']) {
        $_SESSION["userid"] = $resultrow['id'];
        echo 'ok';
        exit;
    } 
    else {
        echo "notok";
    }
}
?>

<script>
	function validateform(){
		$.ajax({
		type: "POST",
		url: 'connexionform.php',
		data: $('#connexion').serialize(), // serializes the form's elements.
		success: function(data)
		{
			if(data=='ok'){
				$("#page").load('menu.php');				
			}
			else{
				$("#page").load('connexionform.php', function(){
					$("#page").append("<span style='color:red;'>Error</span>");
				});
			}
		}
	});
	}
</script>
<ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a>Connexion</a></li>
</ul>
<div class='col-sm-4'>
	<form id="connexion" method="POST">
		<div class="form-group">
	          <label for="email">Email :</label>
	          <input type="text" class="form-control" id="email" name="email" value="" required="required">
	    </div>
	    <div class="form-group">
	          <label for="password">Password :</label>
	          <input type="password" class="form-control" id="password" name="password" value="" required="required">
	    </div>
		<input type="hidden" name="envoyer" id="envoyer">
		<input type="button" class="btn btn-primary" value="Connexion" onclick="javascript:validateform()"/>
	</form>
</div>