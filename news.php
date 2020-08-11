<?php
  include("config/conf.php");
      $query = "SELECT COUNT(id) AS totalId,id FROM post";
      $prepare = $con -> prepare($query);
      $prepare -> execute();
      $dataRow = $prepare -> fetch();

      die($dataRow);
      $totalId = $dataRow['totalId'];
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
        <?php 
         include('includes/nav-bar.php');
         ?>
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
      <?php
  include('includes/footer.php');
  ?>
   <?php
  include('includes/go-up.php');
  ?>
     <?php
  include('includes/copy-right.php');
  ?>
  </body>
  <script src="js/jquery.js" charset="utf-8"></script>
  <script src="js/animate.js" charset="utf-8"></script>
</html>
