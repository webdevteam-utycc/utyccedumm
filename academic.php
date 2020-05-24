<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="Shape your academic future at our University">
    <meta name="Keywords" content="University of Technology Yatanarpon Cyber City,UTYCC,YCC,pyin oo lwin university,UT">
    <meta name="author" content="produly developed by UTYCC Web Development Team">
    <link rel="icon" href="stock-img/logo.ico" type="image/ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/custom-icon.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/css.css">
    <title>UT-YCC | Academic</title>
  </head>
  <body id="academicPage">
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
            <h1>Academic</h1>
            <label class="page-location"><a href="index.php">Home</a> / Academic</label>
          </div>
        </div>
      </div>
      <?php 
      include('academic_graduated_students/index.php');
      ?>
      <br><br>
      <div class="section">
        <div class="container">
       
          <p class="text-justify">The University aims to provide higher quality education. A wide range of undergraduate and postgraduate degree programmes are offered in this university.</p>
          <div class="flex-box">
            <div class="flex-item fi-lg-4x fi-md-12x fi-sm-12x">
              <div class="container-fluid">
                <h3>Bachelor Programme (B.E)</h3>
                <hr class="thin">
                <p class="text-justify">The bachelor degree program is a foundation programme and challenging for the preparation of young individuals who are able to fulfill ever-changing demand of 21st century education. With a variety of courses offered by the various faculties, the candidate will benefit from a broad-based education in multiple disciplines.<br><br>The candidate who wants to join bachelor degree programme must pass the matriculation exam held by the government and must have the total exam marks at least 420.<br><br>To achieve a Bachelor Degree, students have to attend six years. There are two semesters in an academic year. For each semester, it includes mid-term and final exams, tutorials, case study, practical/lab tests and project according to the nature of subject. The students must have at least 75% attendance in every lecture for taking exam. The students will achieve the degree unless they fail to submit mini-thesis in the final year. The Bachelor Degree programmes are:</p>
                <ul>
                  <li>B.E (Information Science and Technology)</li>
                  <li>B.E (Computer Engineering)</li>
                  <li>B.E (Electronics)</li>
                  <li>B.E (Materials and Metallurgy)</li>
                  <li>B.E (Mechanical Precision and Automation)</li>
                </ul>
              </div>
            </div>
            <div class="flex-item fi-lg-4x fi-md-12x fi-sm-12x">
              <div class="container-fluid">
                <h3>Master Programme (M.E)</h3>
                <hr class="thin">
                <p class="text-justify">Master degree programme provides the advanced skills and research needed to work as a qualified engineer in specific specialized-areas. It encompasses the latest research for the development of society and solving the real world problems.<br><br>The student who wants to join master degree programme must possess a bachelor degree in engineering passed with credit in a specific field. Students are required to take the entrance exam and oral test. The students who pass the entrance exam and oral test can join the master degree programme. They are required to attend one year course work and one year thesis.<br><br>The master degree programmes are:</p>
                <ul>
                  <li>M.E (Information Science and Technology)</li>
                  <li>M.E (Computer Engineering)</li>
                  <li>M.E (Electronics)</li>
                  <li>M.E (Materials and Metallurgy)</li>
                  <li>M.E (Mechanical Precision and Automation)</li>
                </ul>
              </div>
            </div>
            <div class="flex-item fi-lg-4x fi-md-12x fi-sm-12x">
              <div class="container-fluid">
                <h3>Doctorate Programme (Ph.D)</h3>
                <hr class="thin">
                <p class="text-justify">The university provides doctor of philosophy in Information Technology degree programme which is a starting point in earning the lifelong task of learning how to do research and academic life. The candidates should be curious to find out the unknown facts of an event and new things. Their research should be able to serve the society by solving social problems. If the candidates want to join this program, the candidates must require the successful completion of master degree and they must take the entrance exam and oral test. They have to study course work for one year and do research work for two years in minimum. The candidates must achieve the successful completion of the course work and research. After the research has been successfully completed, they will get Ph.D. (Information Technology). The doctoral degree program currently offered in our university is:</p>
                <ul>
                  <li>Ph.D (Information Technology)</li>
                </ul>
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
  <script src="js/js.js" charset="utf-8"></script>
</html>
