<?php
mysql_connect('localhost','root','admin');
$db=mysql_select_db('example1');
        
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="335" border="1" cellspacing="2" cellpadding="2">
<tr>
<td>Name</td>
<td>EmailId</td>
<td>password</td>
<td>Gender</td>
<td>Education</td>
<td>Update</td>
<td>Delete</td>
</tr>
<?php
$query ="select * from user";
$result =mysql_query($query);
//numer of row in table
$num =mysql_num_rows($result);
//echo $num;
while($row=mysql_fetch_array($result)){
?>
<tr>
<td><a href="student/<?php echo $studentslug;?>"><?php echo $row['user_name'];?></a> </td>
<td><?php echo $row['email_id'];?> </td>
<td><?php echo $row['password'];?> </td>
<td><?php echo $row['gender'];?> </td>
<td><?php echo $row['education'];?> </td>
<td><a href="update.php?id=<?php echo $row['id'];?>">update</a></td>
<td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>