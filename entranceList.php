<?php
    include("config/conf.php");
    include("functions.php");
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
    <title>UT-YCC | Entrance Lists</title>
    <style media="screen">
      .section .container {
        padding: 20px 0;
      }
    </style>
  </head>
  <body>
    <div class="loader">
      <span class="circle1"></span>
      <span class="circle2"></span>
      <span class="circle3"></span>
      <span class="circle4"></span>
    </div>
    <div class="wrapper">
      <div class="section">
        <div class="container">
          <button onclick="window.location='index.php'" class="btn btn-simple btn-round" type="button" name="button"><span class="ui-icons arrows-1_minimal-left"></span> Back</button>
          <h3>2018 - 2019 Entrance List</h3>
          <div class="flex-box">
<?php
      $query = "SELECT * FROM post WHERE post_type='enterance'";
      $prepare = $con -> prepare($query);
      $prepare -> execute();
      while($row = $prepare -> fetch()){
?>
                <h4>
<?php
  echo $row['title'];
?>
                </h4>
                
                <p class="text-justify"> 
<?php
  echo $row['body'];
?>                  
                </p>
                
<?php
$photo = explode(",",$row['images']);
for($i=0; $i<count($photo); $i++){
?>
            <div class="flex-item fi-lg-6x fi-md-12x fi-sm-12x">
              <div class="container-fluid">
                <div class="img-container">
                  <img src="images/<?php echo $photo[$i];?>" title="<?php echo $row['title'];?>">
                </div>
              </div>
            </div>
<?php
}
}
?>
          </div>
        </div>
      </div>
    </div>
    <div class="go-to-up">
      <span class="ui-icons arrows-1_minimal-up"></span>
    </div>
  </body>
  <script src="js/jquery.js" charset="utf-8"></script>
  <script src="js/animate.js" charset="utf-8"></script>
</html>
