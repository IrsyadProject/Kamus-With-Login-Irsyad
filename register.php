<?php
include_once('connect.php');

$error = false;
if(isset($_POST['Register'])){
    //clean user input to prevent sql injection
    $username = $_POST['username'];
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $email = $_POST['email'];
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $password = $_POST['password'];
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    //validate
    if(empty($username)){
        $error = true;
        $errorUsername = 'Silahkan masukan username';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $errorEmail = 'Silahkan massukan email yang benar';
    }

    if(empty($password)){
        $error = true;
        $errorPassword = 'Please password';
    }elseif(strlen($password) < 6){
        $error = true;
        $errorPassword = 'Password must at least 6 characters';
    }

    //encrypt password with md5
    $password = md5($password);

    //insert data if no error
    if(!$error){
        $sql = "insert into tbl_users(username, email ,password)
                values('$username', '$email', '$password')";
        if(mysqli_query($conn, $sql)){
            $successMsg = 'Register successfully. <a href="index.php">click here to login</a>';
        }else{
            echo 'Error '.mysqli_error($conn);
        }
    }

}

?>
<html>
<head>
<title>Sign Up </title>
    <link rel="stylesheet" type="text/css" href="config/style2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
</head>
<body>
    <div class="loginbox">
    <img src="img/a.png" class="avatar">
        <h1>Register Here</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
            <?php
                    if(isset($successMsg)){
                 ?>
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            <?php echo $successMsg; ?>
                        </div>
                <?php
                    }
                ?>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter your name" autocomplete="off">
            <span class="text-danger"><?php if(isset($errorUsername)) echo $errorUsername; ?></span>
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter your email" autocomplete="off">
            <span class="text-danger"><?php if(isset($errorEmail)) echo $errorEmail; ?></span>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter your password" autocomplete="off">
            <span class="text-danger"><?php if(isset($errorPassword)) echo $errorPassword; ?></span>
            <input type="submit" name="Register" value="Daftar">
            <a href="index.php">Silahkan Login!</a>
        </form>
        
    </div>

</body>
</html>