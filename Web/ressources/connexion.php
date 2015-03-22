<?php
	$connect = mysqli_connect('localhost','root','','m2l-interne');
	mysqli_query($connect, "SET NAMES UTF8");

	function getUserbyId($id, $connect){
		$query="SELECT * FROM user WHERE id = ".$id;
		$result = mysqli_query($connect,$query);
		return $result;
	}
?>