<?php
mysql_connect('localhost','root','admin');
$db=mysql_select_db('example1');
/*if(isset($_POST['submit']))
{
$name        =$_POST['user_name'];
$emailid     =$_POST['email'];
$password    =$_POST['pass'];
$Gender      =isset($_POST['gender']) ? $_POST['gender'] : '';
$education  =$_POST['education'];
//$file=$_POST['file']
//echo $education; die();


$file="images/".$_FILES['file']['name'];

move_uploaded_file($_FILES['file']['tmp_name'], 'C:/xampp/htdocs/exc/images/'.$_FILES['file']['name']);

	echo $query ="INSERT INTO user(user_name,email_id,password,gender,education,file) values('".$name."','".$emailid."','".$password."','".$Gender."','".$education."','".$file."')";
	$result=mysql_query($query);
	
   if($result)
	{
		header('location:user.php');
	}
	
}
*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form name="test" action="" method="post" enctype="multipart/form-data" onsubmit="return false">
<table width="335" border="1" cellspacing="2" cellpadding="2">
	<div id="result"></div>
  <tr>
    <td>Name</td>
    <td><input type="label" name="name" id="name" /></td>
  </tr>
  
  <tr>
    <td>Email_id</td>
    <td><input type="label" name="email" id="email" /></td>
  </tr>
   <tr>
    <td><input type="submit" id="submit" name="submit" value="submit"/></td>
  </tr>
</table>
</form>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#submit').click(function(event){
			//alert ($('#name').val() + $('#email').val());
			$.post('submit-form.php',{name:$('#name').val(),email:$('#email').val()},
				   function(response){
				alert (response);
					  $('#result').html(response);
			       }
			);
		});
	});
</script>
</body>
</html>