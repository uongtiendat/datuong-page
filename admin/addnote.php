<?php
	//session_start();
	include("../database/connect.php");
	//if($_SESSION['login']!=1)
	//echo"<meta http-equiv='refresh' content='0;url=database/login.php' />";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content='width=device-width, initial-scale=1' name='viewport'/>
<title>TienDat's site</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
	
			<div>
				<ul style=" list-style-type:none">
					<li>
						<a href="index.php" style="text-decoration:none">Home</a>
					</li>
					
					<li>
						<a href="themtintuc.php" style="text-decoration:none">New Post</a>
					</li>
					
				</ul></div>
<form method="post" action="../database/process.php" enctype="multipart/form-data">
	<table width="100%">
		<tr><td colspan="2" align="center"><h2>Đăng Bài Mới</h2></td></tr>
		<tr>
			<td>Tiêu đề</td>
			<td><input type="text" name="title" /></td>
		</tr>
		<tr>
			<td>Giới thiệu</td>
			<td><textarea cols="40" rows="4" name="gioithieu"></textarea></td>
		</tr>
		<tr>
			<td>Chi tiết</td>
			<td><textarea cols="40" rows="6" name="chitiet"></textarea></td>
		</tr>
        <!--<tr>
        	<td>Up Hinh</td>
            <td>
       			 <input type="file" name="up" /><br />
            </td>
        </tr>-->
		<tr><td colspan="3" align="center"><input type="submit" name="save" value="Post" /></td></tr>

	</table>
</form>

	
   </div>
</body>
</html>