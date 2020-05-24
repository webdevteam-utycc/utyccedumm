<?php
  if(isset($_GET['id'])){
    include("config/conf.php");
    include("functions.php");
    $id = (int) $_GET['id'];
    if(checkValidPostId($id)){
    if($id!=0){
      $query = "SELECT * FROM post WHERE id=:a";
      $prepare = $con -> prepare($query);
      $prepare -> execute(array(":a"=>"$id"));
      $row = $prepare -> fetch();
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
    <title>UT-YCC | Post Detail</title>
  </head>
  <body id="postDetailPage">
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
            <h1>Latest Posts</h1>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="flex-box">
            <div class="flex-item fi-lg-8x fi-md-12x fi-sm-12x">
              <div class="container-fluid">
                <h4>
<?php
  echo $row['title'];
?>
                </h4>
                <label class="post-status"><span class="ui-icons ui-1_calendar-60"></span>
<?php
  echo $row['upload_date'];
?>
                </label>
                <p class="text-justify"> 
<?php
  echo $row['body'];
?>                  
                </p>
                <div class="flex-box">
<?php
$photo = explode(",",$row['images']);
for($i=0; $i<count($photo); $i++){
?>
                  <div class="flex-item fi-lg-4x fi-md-6x fi-sm-12x">
                    <div class="container-fluid">
                      <div class="img-container">
                        <img class="open-light-box" src="thumbs/<?php echo $photo[$i];?>"
                         data="images/<?php echo $photo[$i];?>" title="<?php echo $row['title'];?>">
                      </div>
                    </div>
                  </div>
<?php
}
?>
                </div>
              </div>
            </div>
            <div class="flex-item fi-lg-4x md-hide">
              <div class="container-fluid">
                <h3>Latest News</h3>
                <div class="flex-box">
<?php
$queryString = "SELECT id,title,upload_date FROM post ORDER BY upload_date DESC LIMIT 4";
$prepareQuery = $con -> prepare($queryString);
$prepareQuery -> execute();
while($resultRow = $prepareQuery -> fetch()){
    if($resultRow['id']!=$id){
?>
                <div class="flex-item fi-lg-12x fi-md-12x fi-sm-12x post-container">
                    <a href="news-details.php?id=<?php echo $resultRow[id];?>">
                      <div class="container-fluid card">
                        <h5 class="bold">
<?php
    echo $resultRow['title'];
?>
                        </h5>
                        <label class="post-status"><span class="ui-icons ui-1_calendar-60"></span>
<?php
    echo $resultRow['upload_date'];
?>
                        </label>
                      </div>
                    </a>
                </div>
  <?php
    }
}
  ?>
                  <button onclick="window.location='news.php'" class="btn btn-primary btn-round btn-link btn-sm" type="button" name="button">More <span class="ui-icons arrows-1_minimal-right"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
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
    <div class="modal">
      <div class="light-box">
        <div class="close-light-box">
          <span class="ui-icons ui-1_simple-remove icons-size-20"></span>
        </div>
      </div>
    </div>
  </body>
  <script src="js/jquery.js" charset="utf-8"></script>
  <script src="js/animate.js" charset="utf-8"></script>
</html>
<?php
}
else{
  header("location: index.php");
}
}
else{
     header("location: index.php");
}
}
else{
  header("location: index.php");
}
?>