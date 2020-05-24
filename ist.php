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
    <title>UT-YCC | Faculty / ICT / IST</title>
  </head>
  <body id="istPage">
    <div class="loader">
      <span class="circle1"></span>
      <span class="circle2"></span>
      <span class="circle3"></span>
      <span class="circle4"></span>
    </div>
    <div class="wrapper">
      <div class="page-cover">
        <div class="page-cover-overlay">
          <nav class="nav-round nav-fixed nav-transparent animate2">
            <div class="nav-brand">
              <a href="index.php">UT-YCC</a>
            </div>
            <div class="nav-feature">
              <a><span class="ui-icons text_align-left icons-size-22 open-menu"></span></a>
              <a href="login.php"><span class="ui-icons users_circle-08 icons-size-22"></span></a>
            </div>
            <?php 
            include('includes/nav-bar.php');
              ?>
          </nav>
          <div class="page-title">
            <h1>Faculty</h1>
            <label class="page-location"><a href="index.php">Home</a> / <a href="faculty.php">Faculty</a> / <a href="ict.php">ICT</a> / IST</label>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <span class="ui-icons ui-1_send icons-size-36"></span>
          <h2>Department of Information Science and Technology</h2>
          <p class="text-justify">Department of Information Science is recognized as one of the most prominent departments for theoretical and methodological reflection of computer science and information practice. The department is preparing the future generations of information specialists for managing communication flows, support of knowledge economy and handling the information explosion. Highly qualified instructors are exploring and doing research that contributes to the society by collaborating with Master and Ph.D. candidates.<br><br>The department encourages instructors’ involvement within the contemporary business world to enhance the quality of classroom instruction and contribute to students’ learning. After completing the study, students are capable of joining multinational companies in IT industry.</p>
        </div>
        <?php
  include('includes/footer.php');
  ?>
   <?php
  include('includes/copy-right.php');
  ?>
    </div>
    <?php
  include('includes/go-up.php');
  ?>
 
  </body>
  <script src="js/jquery.js" charset="utf-8"></script>
  <script src="js/animate.js" charset="utf-8"></script>
</html>
