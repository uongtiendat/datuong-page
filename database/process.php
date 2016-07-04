<?php
session_start();
error_reporting("all");
include("connect.php");
if(isset($_POST[save]))
{
	$title=$_POST[title];
	$gioithieu=$_POST[gioithieu];
	$chitiet=$_POST[chitiet];
	$loaitin=$_POST[loaitin];
	$datepost=date("Y/m/d");
	
	
		if(mysql_query("insert into notes(title,content)
					values('$title','$chitiet')"))
			{
				header("Location:../app/blog.html");
			}
		else
			echo "insert failed";
}

else if(isset($_POST[reply]))
{
	$comments=$_POST[binhluan];
	$comid=$_POST[idcmt];
	if(mysql_query("insert into comments(cmt,id_post)
	values('$comments','$comid')"))
			{
		header("Location:../index.php");
			}
			else
			echo "insert khong thanh cong";
}

else if(isset($_POST[addwork]))
{
	$id=$_POST[id];
	$title=$_POST[title];
	$gioithieu=$_POST[gioithieu];
	$chitiet=$_POST[chitiet];
	$loaitin=$_POST[loaitin];
	$dateRegister=date("Y/m/d");
	$filename=date("Ymdhis")."_".$_FILES["up"]["name"];
	if($_FILES["up"]["name"])
	{
		if(mysql_query("INSERT INTO works(title, content, image) values('$title', '$chitiet', '$filename')"))
		{
			if(move_uploaded_file($_FILES["up"]["tmp_name"],"../res/uploads/".$filename))
			header("Location:../app/projects.html");
		}
		else
			echo "Insert failed";
	}
	//else
	//{
		//if(mysql_query("update mynews set title='$title',intro='$gioithieu',content='$chitiet',id_cate='$loaitin' where id='$id'"))
	//	header("Location:index.php");
	//else
		//echo "Cập nhật khong thanh cong";
	//}
}
else if(isset($_GET[delete]))
{	$id=$_GET[delete];
	if(mysql_query("delete from mynews where id='$id'"))
		header("Location:index.php");
	else
		echo "Xóa khong thanh cong";
}

else if(isset($_POST[dangki]))
{
	$user=$_POST[username];
	$mail=$_POST[email];
	$pass=$_POST[password];
	
	if(mysql_query("insert into users(name,mail,password)
					values('$user','$mail','$pass')"))
			{
				header("Location:../index.php");
			}
		else
			echo "insert khong thanh cong";
}

else if(isset($_POST[dangnhap]))
{
	$user=$_POST[username];
	$mail=$_POST[email];
	$pass=$_POST[password];
	$result=mysql_query("select * from users where name='$user' and password='$pass'");
	if(mysql_num_rows($result))
	{
		$_SESSION['login']=$user;
		header("location:../home/index.php");
	}
	else
		header("location:login.php");

}


else if(isset($_GET[logout]))
{
	session_destroy();
	header("location:login.php");
}
else
{
	header("Location:index.php");
}



?>

