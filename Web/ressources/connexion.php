<?php
	$connect = mysqli_connect('localhost','root','root','m2l-stock2');
	mysqli_query($connect, "SET NAMES UTF8");

	function getUserbyId($id, $connect){
		$query="SELECT * FROM user WHERE id = ".$id;
		$result = mysqli_query($connect,$query);
		return $result;
	}
?>