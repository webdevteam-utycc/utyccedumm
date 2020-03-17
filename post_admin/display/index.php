<?php
include("../config/conf.php");
?>
<!DOCTYPE html>
<html>
  <head>
      
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113861388-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-113861388-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="Shape your academic future at our University">
    <meta name="Keywords" content="University of Technology Yatanarpon Cyber City UTYCC YCC pyin oo lwin">
    <meta name="author" content="produly developed by UTYCC Web Development Team">
    <link rel="icon" href="stock-img/logo.ico" type="image/ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/custom-icon.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>UT-YCC | University of Technology (Yatanarpon Cyber City)</title>
  </head>
  <body>
    <div class="loader">
      <span class="circle1"></span>
      <span class="circle2"></span>
      <span class="circle3"></span>
      <span class="circle4"></span>
    </div>
    <div class="wrapper">
      <div class="hero-img">
        <div class="overlay">
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
              <li class="menu-item active"><a href="index.php">Home</a></li>
              <li class="menu-item"><a href="academic.php">Academic</a></li>
              <li class="menu-item"><a href="faculty.php">Faculty</a></li>
              <li class="menu-item"><a href="research.php">Research</a></li>
              <li class="menu-item"><a href="center.php">Center</a></li>
              <li class="menu-item"><a href="event.php">Events</a></li>
              <li class="menu-item parent"><a>Posts</a>
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
          <div class="hero-title">
            <div class="img-container">
              <img src="stock-img/logo.png" width="100%" alt="">
            </div>
            <h1>University of Technology</h1>
            <h2>(Yatanarpon Cyber City)</h2>
            <q>Shape your academic future at our university.</q>
          </div>
          <div class="hook-up">
            <span class="ui-icons arrows-1_minimal-down icons-size-30"></span>
          </div>
        </div>
      </div>
      <div class="section welcome-section">
        <div class="container">
          <h2 class="text-center">Welcome To Our University</h2>
          <hr class="thick">
          <div class="flex-box">
            <div class="flex-item fi-lg-6x fi-md-6x fi-sm-12x left animate3">
              <div class="container-fluid">
                <div class="vid-container">
                  <div class="polster">
                    <img src="stock-img/utycc.jpg" width="100%" alt="">
                  </div>
                </div>
                <p class="text-justify">University of Technology (Yatanarpon Cyber City) namely UTYCC is a speedy developing learning community that has been recognized as one of the most Myanmar’s technological institutions of higher education. Although it is founded in 2010, UTYCC becomes very well-known both locally and globally within a short period of time.</p>
                <button onclick="window.location='about.php'" class="btn btn-primary btn-round" type="button" name="button">Learn More</button>
              </div>
            </div>
            <div class="flex-item fi-lg-6x fi-md-6x fi-sm-12x right animate5">
              <div class="container-fluid">
                <h3 class="bold">Academic Programmes</h3>
                <p class="text-justify">The University aims to provide higher quality education. A wide range of undergraduate and postgraduate degree programmes are offered in this university.</p>
                <dt>Bachelor Programme</dt>
                <dd class="text-justify">The bachelor degree program is a foundation programme and challenging for the preparation of young individuals who are able to fulfill ever-changing demand of 21st century education. With a va...<a href="academic.php">read more</a></dd><br>
                <dt>Master Programme</dt>
                <dd class="text-justify">Master degree programme provides the advanced skills and research needed to work as a qualified engineer in specific specialized-areas. It encompasses the latest research for the development of soc...<a href="academic.php">read more</a></dd><br>
                <dt>Doctorate Programme</dt>
                <dd class="text-justify">The university provides doctor of philosophy in Information Technology degree programme for the candidates who are interested in earning the lifelong task of learning how to do research and aca...<a href="academic.php">read more</a></dd><br>
                <button onclick="window.location='academic.php'" class="btn btn-primary btn-round" type="button" name="button">Learn More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section event-section">
        <div class="overlay">
          <div class="container">
            <h2 class="text-center">Upcoming Event</h2>
            <hr class="thick bg-white">
            <div class="event-container event1">
              <div class="event-date">
                <h1>  <span class="ui-icons ui-1_bell-53 icons-size-36"></span> On </h1>
                <h2>May - 2018</h2>
              </div>
              <h3 class="bold">
                  Blood Donation Ceremony
              </h3>
              <label class="post-status"><span class="ui-icons tech_watch-time"></span>coming soon</label><br>
              <label class="post-status"><span class="ui-icons location_pin"></span>University of Technology (Yatanarpon Cyber City)</label><br><br>
              <button onclick="window.location='event.php'" class="btn btn-success btn-round" type="button" name="button">View All Events</button>
            </div>
            <div class="event-container event2">
               <div class="event-date">
                <h1><span class="ui-icons ui-1_bell-53 icons-size-36"></span> Coming </h1>
                <h2>soon - 2018</h2>
              </div>
              <h3 class="bold">
                  Student Union Election
              </h3>
              <label class="post-status"><span class="ui-icons tech_watch-time"></span>coming soon</label><br>
              <label class="post-status"><span class="ui-icons location_pin"></span>University of Technology (Yatanarpon Cyber City)</label><br><br>
              <button onclick="window.location='event.php'" class="btn btn-success btn-round" type="button" name="button">View All Events</button>
            </div>
            <div class="event-container event3">
               <div class="event-date">
                <h1><span class="ui-icons ui-1_bell-53 icons-size-36"></span>Coming</h1>
                <h2>Soon - 2018</h2>
              </div>
              <h3 class="bold">
                Red Cross Training            
                         </h3>
              <label class="post-status"><span class="ui-icons tech_watch-time"></span>coming soon</label><br>
              <label class="post-status"><span class="ui-icons location_pin"></span>University of Technology (Yatanarpon Cyber City)</label><br><br>
              <button onclick="window.location='event.php'" class="btn btn-success btn-round" type="button" name="button">View All Events</button>
            </div>
          </div>
        </div>
      </div>
      <div class="section headProf-section">
        <div class="container">
          <h2 class="text-center">Head of University</h2>
          <hr class="thick bg-white">
          <div class="flex-box">
            <div class="flex-item fi-lg-6x fi-md-6x fi-sm-12x text-center">
              <div class="container-fluid">
                <div class="img-container">
                  <img src="stock-img/headProf.jpg" width="100%" alt="">
                </div>
              </div>
            </div>
            <div class="flex-item fi-lg-6x fi-md-6x fi-sm-12x">
              <div class="container-fluid">
                <ul class="icon-ul">
                  <li><span class="ui-icons users_single-02"></span>Dr. Aung Win</li><br>
                  <li><span class="ui-icons business_briefcase-24"></span>Rector (Acting), University of Technology (Yatanarpon Cyber City)</li><br>
                  <li><span class="ui-icons education_hat"></span> Ph.D (IT)</li><br>
                  <li><span class="ui-icons ui-1_email-85"></span>dr.aungwin@utycc.edu.mm</li><br>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section news-section text-center">
        <div class="container">
          <h2 class="text-center">Latest News</h2>
          <hr class="thick">
          <div class="flex-box text-left">

<?php
$query = "SELECT id,title,body,upload_date,images FROM post ORDER BY id DESC LIMIT 3";
$prepare = $con -> prepare($query);
$prepare -> execute();
while($row = $prepare -> fetch()){
  $poster = explode(",", $row['images']);
?>
         <div class="flex-item fi-lg-4x fi-md-12x fi-sm-12x post-container">
          <a href="news-details.php?id=<?php echo $row[id];?>">
            <div class="container-fluid">
              <div class="img-container">
                <img src="../thumbs/<?php echo $poster[0]; ?>" width="100%" alt="">
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
          </div><br>
          <button onclick="window.location='news.php'" class="btn btn-primary btn-round" type="button" name="button">View All News</button>
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