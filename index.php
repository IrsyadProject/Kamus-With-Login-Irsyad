<?php 
session_start();
include_once('connect.php');

$error = false;
if(isset($_POST['Login'])){
    $email = trim($_POST['email']);
    $email = htmlspecialchars(strip_tags($email));

    $password = trim($_POST['password']);
    $password = htmlspecialchars(strip_tags($password));

    if(empty($email)){
        $error = true;
        $errorEmail = 'Please input email';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $errorEmail = 'Please enter a valid email address';
    }

    if(empty($password)){
        $error = true;
        $errorPassword = 'Please enter password';
    }elseif(strlen($password)< 6){
        $error = true;
        $errorPassword = 'Password at least 6 character';
    }

    if(!$error){
        $password = md5($password);
        $sql = "select * from tbl_users where email='$email' ";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        if($count==1 && $row['password'] == $password){
            $_SESSION['username'] = $row['username'];
            header('location: home.php?page=home');
        }else{
            $errorMsg = 'Invalid Username or Password';
        }
    }
}
?>
<html>
<head>
<title>Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="config/style1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script src="assets/js/bootstrap.js"></script>
</head>

<body>
    <div class="loginbox">
    <img src="img/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" method="post" name="form1" >
            <?php
                    if(isset($errorMsg)){
                        ?>
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            <?php echo $errorMsg; ?>
                        </div>
                        <?php
                    }
                ?>
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" autocomplete="off">
            <span class="text-danger"><?php if(isset($errorEmail)) echo $errorEmail; ?></span>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" autocomplete="off">
            <span class="text-danger"><?php if(isset($errorPassword)) echo $errorPassword; ?></span>
            <input type="submit" name="Login" value="Login">
            <a href="forgot.php">Lupa password?</a><br>
            <a href="register.php">Daftar akun baru?</a>
        </form>
        
    </div>

</body>
</html>