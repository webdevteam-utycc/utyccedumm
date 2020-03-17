<?php
session_start();
$salt = time('now');
$token = hash("sha256", $salt);
$_SESSION['token'] = $token;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="stock-img/logo.ico" type="image/ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/custom-icon.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/custom.css">
    <title></title>
</head>

<body id="loginPage">
<div class="loader">
    <span class="circle1"></span>
    <span class="circle2"></span>
    <span class="circle3"></span>
    <span class="circle4"></span>
</div>
<div class="wrapper">
    <div class="overlay">
        <div class="login-box">
            <h2>Login</h2>
            <form class="ui-form" action="ukl86mx4/login_process.php" method="post">
                <input class="form-control ui-round block form-row" type="text" name="name" value=""
                       placeholder="Teacher's name or Roll no.">
                <input class="form-control ui-round block form-row" type="password" name="password" value=""
                       placeholder="Password">
                <input type="hidden" name="tok" value="<?php echo $token; ?>">
                <!-- <div class="form-row">
      <input type="radio" name="rank" value="">Student
      <input type="radio" name="rank" value="">Staff/Admin
    </div> -->
                <input class="btn btn-primary btn-round" type="submit" name="login" value="Sign In">
                <a href="index.php"><button class="btn btn-primary btn-link" type="button" name="button">Go to
                        home page</button></a>
            </form>
        </div>
    </div>
</div>
</body>
<script src="js/jquery.js" charset="utf-8"></script>
<script src="js/animate.js" charset="utf-8"></script>

</html>
