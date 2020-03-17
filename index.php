<?php
include("config/conf.php");
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
    <style>
       
         .sub-child-acitve{
            display: block !important;
         }
      </style>
    <title>1UT-YCC | University of Technology (Yatanarpon Cyber City)</title>
    
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
         <?php 
         include('includes/nav-bar.php');
         ?>
          <div class="hero-title">
            <div class="img-container">
              <img src="stock-img/logo.png" width="100%" alt="">
            </div>
            <h1>University of Technology</h1>
            <h2>(Yatanarpon Cyber City)</h2>
            <q>Shape and Bright Your Future at UTYCC</q>
          </div>
          <div class="hook-up">
            <span class="ui-icons arrows-1_minimal-down icons-size-30"></span>
          </div>
        </div>
      </div>
      <div class="section welcome-section">
        <div class="container">
          <h2 class="text-center">About University</h2>
          <hr class="thick">
          <div class="flex-box">
            <div class="flex-item fi-lg-6x fi-md-6x fi-sm-12x left animate3">
              <div class="container-fluid">
                <div class="vid-container">
                  <div class="polster">
                    <img src="stock-img/utycc.jpg" width="100%" alt="">
                  </div>
                </div>
               
                 </div>
            </div>
            <div class="flex-item fi-lg-6x fi-md-6x fi-sm-12x right animate5">
              <div class="container-fluid">
              <p class="text-justify">University of Technology (Yatanarpon Cyber City) namely UTYCC is a speedy developing learning community that has been recognized as one of the most Myanmar’s technological institutions of higher education.
              Although it is founded in 2010, UTYCC becomes very well-known both locally and globally within a short period of time. 
              There are four main faculties in our university: Faculty of Information & Communication Technology, Faculty of Electronic Engineering, Faculty of Precision Engineering and Faculty of Materials Engineering.
              As an international collaboration program, UTYCC is a member institute of ASEAN Cyber University Project. E-learning center was established with the assistance of Korea International Cooperation Agency (KOICA) in July 2012.
              </p><br><br><br>
              <button onclick="window.location='about.php'" class="btn btn-primary btn-round" type="button" name="button">Learn More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section vision-section text-center">
        <div class="container">
          <div class="flex-box">
              <div class="flex-item fi-lg-4x fi-md-4x fi-sm-12x left animate3">
                <div class="container-fluid">
                <img src="img/vision.png" alt="" style="width: 100px; height: 100px;">
                <h2>Vision</h2>
                <p class="text-left text-md-center">To be a Globally Remarkable Research based University and Cyber University</p>
                </div>
              </div>
              <div class="flex-item fi-lg-4x fi-md-4x fi-sm-12x right animate5">
                <div class="container-fluid">
                  <img src="img/mission.png" alt=""  style="width: 100px; height: 100px;">
                  <h2>Mission</h2>
                  <p class="text-left text-md-center">To provide skillful engineers and outstanding researchers<br><br>
                  To create broad access of engineering education opportunities with smart learning<br><br>
                  To be a national/regional/global level high ranking university</p>
                </div>
              </div>
              <div class="flex-item fi-lg-4x fi-md-4x fi-sm-12x right animate5">
                <div class="container-fluid">
                <img src="img/motto.png" alt="" style="width: 100px; height: 100px;">
                <h2>Motto</h2>
                <p class="text-center">"Shape and Bright Your Future at UTYCC"</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="section academic-section text-center">
        <div class="container">
          <h2 class="text-center">Academic Programmes</h2>
          <hr class="thick">
          <p>The University aims to provide higher quality education. A wide range of undergraduate and postgraduate degree programmes are offered in this university.</p>
          <div class="flex-box">
            <div class="flex-item fi-lg-4x fi-md-4x fi-sm-12x left animate3">
              <div class="container-fluid">
                <h3>Bachelor Programme<br><span>( B.E )</span></h3>
                <p class="text-justify">The bachelor degree program is a foundation programme and challenging for the preparation of young individuals who are able to fulfill ever-changing demand of 21st century education.
                <br><br>The candidate who wants to join bachelor degree programme must pass the matriculation exam held by the government and must have the total exam marks at least 420.</p>
              </div>
            </div>
            <div class="flex-item fi-lg-4x fi-md-4x fi-sm-12x right animate5">
              <div class="container-fluid">
                <h3>Master Programme<br><span>( M.E )</span></h3>
                <p class="text-justify">Master degree programme provides the advanced skills and research needed to work as a qualified engineer in specific specialized-areas.<br><br>
                The student who wants to join master degree programme must possess a bachelor degree in engineering passed with credit in a specific field.</p>
              </div>
            </div>
            <div class="flex-item fi-lg-4x fi-md-4x fi-sm-12x right animate5">
              <div class="container-fluid">
                <h3>Doctorate Programme<br><span>( Ph.D )</span></h3>
                <p class="text-justify">The university provides doctor of philosophy in Information Technology degree programme which is a starting point in earning the lifelong task of learning how to do research and academic life. The candidates should be curious to find out the unknown facts of an event and new things. Their research should be able to serve the society by solving social problems.</p>
              </div>
            </div>
          </div>
          <button onclick="window.location='about.php'" class="btn btn-primary btn-round" type="button" name="button">Learn More</button>
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
                  <li><span class="ui-icons ui-1_email-85"></span>most.yatanarpon@gmail.com</li><br>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section certificate-section">
        <div class="container">
          <h2 class="text-dark text-center">Certified Undergraduate Engineering Education and Training Services</h2><br><br>
          <div class="flex-box">
            <div class="flex-item fi-lg-9x fi-md-9x fi-sm-12x">
              <p class="text-justify p-7">The standard is used by organizations to demonstrate 
                    their ability to  provide products and services
                    that meet customer and regulatory requirements and to demonstrate continuous improvement.
                    he standard is used by organizations to demonstrate 
                    their ability to  provide products and services
                    that meet customer and regulatory requirements and to demonstrate continuous improvement.<br><br>
                    
              </p>
            </div>
            <div class="flex-item fi-lg-3x fi-md-3x fi-sm-12x">
              <img  class="open-light-box" src="thumbs/img-certificate.png"
                         data="images/img-certificate.png" style="border: 1px solid black;" >
              <p class=" iso-date">ISO 9001:2015</p>
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
$query = "SELECT id,title,body,upload_date,images FROM post ORDER BY upload_date DESC LIMIT 3";
$prepare = $con -> prepare($query);
$prepare -> execute();
while($row = $prepare -> fetch()){
  $poster = explode(",", $row['images']);
?>
         <div class="flex-item fi-lg-4x fi-md-12x fi-sm-12x post-container">
          <a href="news-details.php?id=<?php echo $row[id];?>">
            <div class="container-fluid">
              <div class="img-container">
                <img src="thumbs/<?php echo $poster[0]; ?>" width="100%" alt="">
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
    
  <?php
  include('includes/footer.php');
  ?>
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
    <?php
  include('includes/copy-right.php');
  ?>
  </body>
  <script src="js/jquery.js" charset="utf-8"></script>
  <script src="js/animate.js" charset="utf-8"></script>
  <script type="text/javascript">
     $(document).ready(function() {
      $('.sub-parent').hover(function(e){
          e.preventDefault();
          $(this).find('ul').toggleClass('sub-child-acitve');
      });
    });
  </script>
 
</html>