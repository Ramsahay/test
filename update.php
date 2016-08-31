<?php
mysql_connect('localhost','root','admin');
$db=mysql_select_db('example1');
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
	$query="select * from user where id=".$id;
	$result=mysql_query($query);
	$row   =mysql_fetch_array($result);
if(isset($_POST['update']))
{
$name        =$_POST['user_name'];
$emailid     =$_POST['email'];
$Gender      =isset($_POST['gender']) ? $_POST['gender'] : '';
$education  =$_POST['education'];
	$query ="update user set user_name='".$name."', email_id='".$emailid."' , gender='".$Gender."', education='".$education."' where id=".$id;
	$result=mysql_query($query);
	if($result){
		header('location:user.php');
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
<form action="" method="post">
<table width="335" border="1" cellspacing="2" cellpadding="2">
 
  <tr>
    <td>User Name</td>
    <td><input type="label" name="user_name" id="user_name" value="<?php echo $row['user_name'];?>"/></td>
  </tr>
  
  <tr>
    <td>Email_id</td>
    <td><input type="label" name="email" id="email" value="<?php echo $row['email_id'];?>" /></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><input type="radio" name="gender" id="gender" value="male"<?php echo isset($row['gender']) && $row['gender'] =='male' ? 'checked' : '';?>/>Male</td>
    <td><input type="radio" name="gender" id="gender" value="female"<?php echo isset($row['gender']) && $row['gender'] =='female' ? 'checked' : '';?>/>Female</td>
  </tr>
  <tr>
    <td>Education</td>
    <td><input type="label" name="education" id="email" value="<?php echo $row['education'];?>" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="update" value="update"/></td>
  </tr>
</table>
</form>


</body>
</html>