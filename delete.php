<?php
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
mysql_connect('localhost','root','admin');
$db=mysql_select_db('example1');
	$query ="delete from user where id =".$id;
	$result =mysql_query($query);
	if($result){
		header('location:user.php');
	}
	
	?>