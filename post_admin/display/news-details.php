<?php
  if(isset($_GET['id'])){
    include("../config/conf.php");
    include("../functions.php");
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
            <ul class="menu-item-group">
              <a><span class="ui-icons ui-1_simple-remove icons-size-22 close-menu"></span></a>
              <li class="menu-item"><a href="index.php">Home</a></li>
              <li class="menu-item"><a href="academic.php">Academic</a></li>
              <li class="menu-item"><a href="faculty.php">Faculty</a></li>
              <li class="menu-item"><a href="research.php">Research</a></li>
              <li class="menu-item"><a href="center.php">Center</a></li>
              <li class="menu-item"><a href="event.php">Events</a></li>
              <li class="menu-item active parent"><a>Posts</a>
                <ul class="submenu-item-group">
                  <li class="submenu-item"><a href="news.php">News</a></li>
                  <li class="submenu-item"><a href="examResult.php">Exam Results</a></li>
                  <li class="submenu-item"><a href="entranceList.php">Entrance List</a></li>
                </ul>
              </li>
              <li class="menu-item parent"><a>Gallery</a>
                <ul class="submenu-item-group">
                  <li class="submenu-item"><a href="picture.php">Pictures</a></li>
                  <li class="submenu-item"><a href="video.php">Videos</a></li>
                </ul>
              </li>
              <li class="menu-item"><a href="about.php">About</a></li>
            </ul>
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
                        <img class="open-light-box" src="../thumbs/<?php echo $photo[$i];?>"
                         data="../images/<?php echo $photo[$i];?>" title="<?php echo $row['title'];?>">
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
$queryString = "SELECT id,title,upload_date FROM post ORDER BY id DESC LIMIT 4";
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
      <div class="section footer-section">
        <div class="container">
          <div class="flex-box">
            <div class="flex-item fi-lg-6x fi-md-6x fi-sm-12x">
              <div class="container-fluid">
                <h3>Contact Us</h3>
                <hr class="thin bg-white">
               <p>+95-025178100, +95-025178200, +95-025178103</p>
                <p>info@utycc.edu.mm</p>
                <p>At 28 miles on Mandalay – Lashio road, between Pyin Sar Village and Thone Taung Village, Pyin Oo Lwin, Myanmar.</p>
              </div>
            </div>
            <div class="flex-item fi-lg-6x fi-md-6x fi-sm-12x">
              <div class="container-fluid">
                <h3>Get Updates</h3>
                <hr class="thin bg-white">
                <p>Latest University news and events delivered right to your inbox.</p>
                <form class="ui-form" action="getupdate.html" method="post">
                  <input class="form-control ui-round" type="text" name="" value="" placeholder="Email Address">
                  <input class="btn btn-primary btn-round" type="submit" name="" value="Subscribe">
                </form>
                <p>Copyright © 2017 by University of Technology (Yatanarpon Cyber City)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="go-to-up">
      <span class="ui-icons arrows-1_minimal-up"></span>
    </div>
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