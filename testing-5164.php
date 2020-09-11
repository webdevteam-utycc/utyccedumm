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
    <title>UT-YCC | Conference / The IRCSE 2021</title>
</head>
<body id="ictPage">
<div class="loader">
    <span class="circle1"></span>
    <span class="circle2"></span>
    <span class="circle3"></span>
    <span class="circle4"></span>
</div>
<div class="wrapper">
    <div class="page-cover page-cover-2">
        <div class="page-cover-overlay-2">
            <?php
            include('includes/nav-bar.php');
            ?>
            <div class="page-title">
                <h1>Conference</h1>
                <label class="page-location"><a href="index.php">Home</a> / <a href="#">Conference</a> / IRCSE
                    2021</label>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="flex-box">
                <div class="flex-item fi-lg-9x fi-md-9x fi-sm-12x">
                    <!-- Start Organization Committee -->
                    <div class="container-fluid">
                        <h3>Organization Committee</h3>
                        <div class="flex-box">
                            <div class="flex-item fi-lg-12x fi-md-12x fi-sm-12x">
                                <div class="container-fluid">
                                    <ul>
                                        <li>Prof. Aung Win, Rector, University of Technology (Yatanarpon Cyber City)
                                        </li>
                                        <li>Prof. Reenu, Pro-Rector, University of Technology (Yatanarpon Cyber City)
                                        </li>
                                        <li>Prof. Hnin Aye Thant, Head, Department of Information Science, UTYCC</li>
                                        <li>Prof. Aye Wai Oo, Head, Department of Computer Engineering, UTYCC</li>
                                        <li>Prof. Htin Kyaw Oo, Head, Faculty of Electronics and Communication
                                            Engineering, UTYCC
                                        </li>
                                        <li>Prof. Htein Win, Head, Faculty of Advanced Materials Engineering, UTYCC</li>
                                        <li>Prof. Aung Ko, Head, Faculty of Precision Engineering, UTYCC</li>
                                        <li>Prof. Tin Swe Aye, Head, Department of Mathematics, UTYCC</li>
                                        <li>Prof. Su Su Thein, Head, Department of Physics, UTYCC</li>
                                        <li>Prof. Khin Mooh Thein, Head, Department of Chemistry, UTYCC</li>
                                        <li>Asso. Prof. Htun Lin Kyaw, Head, Department of Myanmar, UTYCC</li>
                                        <li>Asso. Prof. Khin Aye Mu, Head, Department of English, UTYCC</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Organization Committee -->

                <?php include('includes/conference-right-cards.php'); ?>
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

