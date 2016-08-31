<?php
session_start();
phpinfo();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Untitled Document</title>
</head>
<tr>
<td>Hello:<?php echo $_SESSION['user_name'];?></td>
<td><a href="logout.php">logout</a></td>
</tr>

<body>
</body>
</html>
