<?php 
    
    $username = $pass = '';
    $errors = array('username' => '' , 'password' => '' );

    if (isset($_POST['submit'])) {
        
        if (empty($_POST['username'])) {
            $errors['username'] = "Bạn chưa nhập tài khoản ";
        }

        if (empty($_POST['password'])) {
            $errors['password'] = "Bạn chưa nhập mật khẩu ";
         } else {
            include('login.php');
         }
    }


 ?>


<html>

<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/sign in.css">

<style type="text/css">
    .loginbox input[type="email"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
</style>
<body style="background-image: url(images/login_bg.jpg); ">
    <div class="loginbox" style="height: 500px">
        <img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post">        
            <p>User name</p>
            <input type="text" name="username" placeholder="Enter Username" value="<?php echo htmlspecialchars($username) ?>">
            <div style="color: #FF3030"><?php echo $errors['username']; ?></div><br>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter password" value="<?php htmlspecialchars($pass) ?>">
            <div style="color: #FF3030 "><?php echo $errors['password']; ?></div><br>
            <input type="submit" name="submit" value="Login">
            <a href="#">Lost your password?</a><br>
            
        </form>

    </div>
</body>
</head>

</html>
