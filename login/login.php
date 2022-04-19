<?php
 	session_start();
	$conn = mysqli_connect('localhost','root','','data') or die('Không thể kết nói với database');

if(isset($_POST['submit'])) {
	$username = trim($_POST['username']);
	$pass= trim($_POST['password']);



	$query = "SELECT username, password FROM user WHERE username='$username'";

	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

	$row = mysqli_fetch_array($result);

	if ($pass != $row['password']) {
		echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit;
	}

	//Lưu tên đăng nhập
	$_SESSION['username'] = $username;
	echo "Xin chào <b>" . $username . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
	die();
    $_SESSION['quyenhan']=  $urow['quyenhan'];
	
    header('Location:/HLB-master/admin/index.html ');

	  

	}  
	



?>