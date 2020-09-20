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
    <title>UT-YCC | Conference / The 1st IRCSE 2020</title>
</head>
<body id="ircse_Page">
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
            <?php
            include('includes/ircse/ircse-upper-page.php')
            ?>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="flex-box">
                <div class="flex-item fi-lg-8x fi-md-8x fi-sm-12x">
                    <!-- Start Steering Committee -->
                    <div class="container-fluid">
                        <h3>Conference Steering Committee</h3>
                        <div class="flex-box">
                            <div class="flex-item fi-lg-12x fi-md-12x fi-sm-12x">
                                <div class="container-fluid">
                                    <ul>
                                        <li>Dr. Ikenoue, President, University of Miyazaki, Japan</li>
                                        <li>Prof. Pyke Tin, University of Miyazaki, Japan</li>
                                        <li>Prof. Aung Win, Rector, University of Technology (Yatanarpon Cyber City)
                                        </li>
                                        <li>Prof. Thi Thi Zin, University of Miyazaki, Japan
                                        </li>
                                        <li>Prof. Ye Kyaw Thu, Artificial Intelligence Research Unit (AINRU), National
                                            Electronic & Computer Technology Center (NECTEC), Thailand
                                        </li>
                                        <li>Prof. Naing Naing Aung, Former Materials Scientist, West Virginia
                                            University, United States of America
                                        </li>
                                        <li>Prof. Noriyuki HAYASHI, Department of Electrical Engineering, University of
                                            Miyazaki, Japan
                                        </li>
                                        <li>Chief. Win Kyaw, Visiting Professor, UTYCC, Chief Metallurgist (Rtd), MMG,
                                            Democratic Republic of the Congo (DRC)
                                        </li>
                                        <li>Prof. Yin May, Department of Mathematics, Technological University
                                            (Magway)
                                        </li>
                                        <li>Prof. Tin Myint Htwe, (Rtd.), Department of Engineering Chemistry, Mandalay
                                            Technological University
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Steering Committee -->
                </div>
                <?php include('includes/ircse/conference-right-cards.php'); ?>
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

