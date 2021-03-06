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
    <title>UT-YCC | Login</title>
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
          <form class="ui-form" action="getupdate.html" method="post">
            <input class="form-control ui-round block form-row" type="text" name="" value="" placeholder="Username">
            <input class="form-control ui-round block form-row" type="password" name="" value="" placeholder="Password">
            <div class="form-row">
              <input type="radio" name="rank" value="">Student
              <input type="radio" name="rank" value="">Staff/Admin
            </div>
            <input class="btn btn-primary btn-round" type="submit" name="" value="Sign In">
            <a href="index.php"><button class="btn btn-primary btn-link" type="button" name="button">Go to home page</button></a>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script src="js/jquery.js" charset="utf-8"></script>
  <script src="js/animate.js" charset="utf-8"></script>
</html>
