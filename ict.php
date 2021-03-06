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
    <title>UT-YCC | Faculty / ICT</title>
  </head>
  <body id="ictPage">
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
            <h1>Faculty</h1>
            <label class="page-location"><a href="index.php">Home</a> / <a href="faculty.php">Faculty</a> / ICT</label>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <span class="ui-icons objects_globe icons-size-36"></span>
          <h2>Faculty of Information and Communication Technology</h2>
          <p class="text-justify">Faculty of Information and Communication Technology of University of Technology (Yatanarpon Cyber City) is organized with competent instructors and enthusiastic researchers. We educate the students to be talented in their study areas and conduct innovative scientific research.<br><br>The students are being trained to have 21st century skills comprised of: collaboration and team work skills, creativity and imagination skills, critical thinking and problem solving skills. Due to their in-depth knowledge of information science and computer engineering, they are able to solve the real world problems faced within society in sophisticated way that lead to achieve work readiness skills. The Faculty is composed of two sub-departments.</p>
          <div class="flex-box">
            <div class="flex-item fi-lg-6x fi-md-6x fi-sm-12x">
              <div class="container-fluid">
                <div class="unit">
                  <span class="ui-icons ui-1_send icons-size-36"></span>
                  <h3>Information Science and Technology</h3>
                  <p class="text-justify">Department of Information Science is recognized as one of the most prominent departments for theoretical and methodological reflection of computer science and information practice. The department is preparing the future generations of information specialists for managing communication flows, support of knowledge economy and handling the information explosion. Highly qualified instructors are exploring and doing research that contributes to the society by collaborating with Master and Ph.D. candidates.</p>
                  <button onclick="window.location='ist.php'" class="btn btn-primary btn-sm btn-simple btn-round" type="button" name="button">Learn More</button>
                </div>
              </div>
            </div>
            <div class="flex-item fi-lg-6x fi-md-6x fi-sm-12x">
              <div class="container-fluid">
                <div class="unit">
                  <span class="ui-icons tech_laptop icons-size-36"></span>
                  <h3>Computer Engineering</h3>
                    <p class="text-justify">Computer Engineering Department offers high quality engineering education equipped with state of the art knowledge and skills to the students in order to become life-long learners, problem solvers and engineers with the scene of professional responsibility. The courses from our Department cover communication network,  network security, embedded system and IoT. AI and Machine Learning and other ICT engineering related.  </p>
                    <button onclick="window.location='ce.php'" class="btn btn-primary btn-sm btn-simple btn-round" type="button" name="button">Learn More</button>
                </div>
              </div>
            </div>
          </div>
          <div class="flex-box">
              <div class="flex-item fi-lg-6x fi-md-12x fi-sm-12x">
                  <div class="container-fluid">
                      <h3>Vision</h3>
                      <hr class="thin">
                      <ul>
                       <li>Becoming intellectual professionals, practitioners, and future leaders of existing and emerging information technologies.</li>
                        <li>Providing leadership for effective strategic and tactical planning in the use of technology by applying engineering knowledge, techniques, use of engineering technology, tools and equipment.</li>
                        
                      </ul>
                      <h3>Mission</h3>
                      <hr class="thin">
                      <ul>
                        <li>Enrich society and advanced computer science and engineering by preparing graduates with the knowledge, abilities and skills to become innovators and leaders who are able to contribute to the aspirations of the country.</li>
                        <li>Benefit humanity through research, creativity, problem solving and application development.</li>
                        <li>Share knowledge and expertise to benefit the country, the region and beyond while inspiring people to engage in computing fields.</li>
                      </ul>
                  </div>
              </div>
              <div class="flex-item fi-lg-6x fi-md-12x fi-sm-12x">
                  <div class="container-fluid">
                      <h3>Objectives</h3>
                      <hr class="thin">
                      <ul>
                          <li>To train the students with best standards of theoretical and practical aspects of emerging information technology and a user community</li>
                          <li>To provide the students with the most reliable and innovative technology to meet the needs of an ever-changing and challenging the real world problems, along with the use of technology effectively</li>
                          <li>To fulfil students characterized by ethical practice, professional values, analytical skill, critical thinking, leadership and lifelong learning</li>
                      </ul>
                      <h3>Motto</h3>
                      <hr class="thin">
                      <q>Illuminate mind, Endorse innovation</q>
</q>
        </div>
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

