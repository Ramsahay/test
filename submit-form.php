<?php
mysql_connect('localhost','root','admin');
$db=mysql_select_db('example1');
	$name=$_POST['name'];
    $email=$_POST['email'];
    //echo "name=".$name."&email=".$email;
	$insert="INSERT INTO `user`(`user_name`,`email_id`)VALUES('$name','$email')";
		$query=mysql_query($insert);
		if($query>0){
			echo '1';
			}
		else{
			echo '0';
	}

?>