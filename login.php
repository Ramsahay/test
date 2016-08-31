<?php
session_start();
mysql_connect('localhost','root','admin');
mysql_select_db('example1');
//print_r($results);
if(isset($_POST['login']))
{
	$emailid=$_POST['email'];
    $password=$_POST['pass'];
 	 $query="select id from user WHERE email_id='".$emailid."' or 1=1-- AND  password='".$password."'";
	
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	//print_r($row);die;
	$num=mysql_num_rows($result);
	if($num>0){
		$_SESSION['id'] = $row['id'];
		$_SESSION['user_name'] = $row['user_name'];
		$_SESSION['email_id'] = $row['email_id'];
		header('location:dashboard.php');
		
	}
	else{
		header('location:login.php');
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form name="log" action="" method="post">
<table width="200" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td>Email_id</td>
    <td><input type="text" name="email" id="email" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="pass" id="pass"/></td>
  </tr>
   <tr>
    <td colspan="2" align="center"><input type="submit" name="login" value="login"/></td>
  </tr>
</table>
</form>
</body>
</html>