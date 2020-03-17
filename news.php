<?php
  include("config/conf.php");
      $query = "SELECT id FROM post";
      $prepare = $con -> prepare($query);
      $prepare -> execute();
      $dataRow = $prepare -> fetch();

      $totalId = $prepare->rowCount();
      $dividedPage = ceil($totalId/9);
      
      $start = 0;
      $limit = 9;
      $end = 0;
      global $id;
      if(isset($_GET['num'])){
          $id = (int) $_GET['num'];
          
          if($id!=0){
              $end = $id*9;
              $start = $end-9;
          }
          else{
              header("location:news.php");
          }
      }          
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="Shape your academic future at our University">
    <meta name="Keywords" content="University of Technology Yatanarpon Cyber City,UTYCC,YCC,pyin oo lwin university,UT">
    <meta name="author" content="produly developed by UTYCC Web Development Team">
    <link rel="icon" href="stock-img/logo.ico" type="image/ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/custom-icon.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>UT-YCC | News</title>
  </head>
  <body id="newsPage">
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
            <label class="page-location"><a href="index.php">Home</a> / Posts / News</label>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="flex-box">
<?php
$query = "SELECT id,title,body,upload_date,images FROM post ORDER BY upload_date DESC LIMIT $start, $limit";
$prepare = $con -> prepare($query);
$prepare -> execute();
while($row = $prepare -> fetch()){
  $poster = explode(",", $row['images']);
?>
        
            <div class="flex-item fi-lg-4x fi-md-12x fi-sm-12x post-container">
              <a href="news-details.php?id=<?php echo $row[id];?>">
                <div class="container-fluid">
                  <div class="img-container">
                    <img src="thumbs/<?php echo $poster[0];?>" width="100%" alt="">
                  </div>
                  <h5 class="bold">
<?php
  echo $row['title'];
?>
                  </h5>
                  <label class="post-status"><span class="ui-icons ui-1_calendar-60"></span>
<?php
  echo $row['upload_date'];
?>
                  </label>
                </div>
              </a>
            </div>
<?php
}
?>
        <div>
            <ul class="pagination">
<?php
$status="";
for($i=1; $i<=$dividedPage; $i++){
           if($i == $id){
               $status="active";
           }
           else{
               $status = "";
           }
            echo "<li class='page-item $status'><a class='page-link' href='news.php?num=".$i."'>$i</a></li>";  
}
?>
            </ul>
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
  </body>
  <script src="js/jquery.js" charset="utf-8"></script>
  <script src="js/animate.js" charset="utf-8"></script>
</html>
