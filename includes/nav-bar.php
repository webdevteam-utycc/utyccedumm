<?php 

  $url = $_SERVER['REQUEST_URI'];

  $home = substr_count($url, 'index') > 0;
  $academic = substr_count($url, 'academic') > 0;
  $faculty = substr_count($url, 'ict') > 0 || substr_count($url, 'ece') > 0 || substr_count($url, 'pre') > 0 || substr_count($url, 'ist') > 0 || substr_count($url, 'ame') > 0;
  $conference = substr_count($url, 'urcse2020') > 0 || substr_count($url, 'papers') > 0;
  $news = substr_count($url, 'news') > 0;
  $gallery = substr_count($url, 'picture') > 0 || substr_count($url, 'video') > 0;
  $about = substr_count($url, 'about') > 0;
  
?>

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
    <li class="menu-item <?php echo $home ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
    <li class="menu-item <?php echo $academic ? 'active' : ''; ?>"><a href="academic.php">Academic</a></li>
    <li class="menu-item <?php echo $faculty ? 'active' : ''; ?>  parent">
      <a href="#">Faculty/Office</a>
      <ul class="submenu-item-group">
        <li class="submenu-item"><a href="ict.php">Department of ICT</a></li>
        <li class="submenu-item"><a href="ece.php">Department of ECE</a></li>
        <li class="submenu-item"><a href="pre.php">Department of PRE</a></li>
        <li class="submenu-item"><a href="ame.php">Department of AME</a></li>
        <li class="submenu-item"><a href="coming-soon.php">Rector Office</a></li>
        <li class="submenu-item"><a href="coming-soon.php">Student Affair Officer</a></li>
      </ul>
    </li>
    <li class="menu-item parent"><a href="#">Research/Laboratory</a>
      <ul class="submenu-item-group">
        <li class="submenu-item"><a href="master.php">Master</a></li>
        <li class="submenu-item sub-parent"><a href="#" style="pointer-events:none;">Lab</a>
          <ul class="sub-child">
            <li class="submenu-item " style="padding: 0px 18px;"><a href="coming-soon.php">NLP</a></li>
            <li class="submenu-item " style="padding: 0px 18px;"><a href="coming-soon.php">Cloud Computing</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="menu-item parent"><a href="#">Collaboration</a>
      <ul class="submenu-item-group">
        <li class="submenu-item"><a href="coming-soon.php">Regional</a></li>
        <li class="submenu-item sub-parent"><a href="#" style="pointer-events:none;">International</a>
          <ul class="sub-child">
            <li class="submenu-item" style="padding: 0px 18px;"><a href="coming-soon.php">US AID</a></li>
            <li class="submenu-item" style="padding: 0px 18px;"><a href="coming-soon.php">ACU</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="menu-item <?php echo $conference ? 'active' : ''; ?> parent"><a>Conference</a>
      <ul class="submenu-item-group">
        <li class="submenu-item sub-parent"><a href="coming-soon.php">IRCSE 2021</a></li>
        <li class="submenu-item sub-parent"><a href="urcse2020.php">The 1<sup>st</sup> URCSE 2020</a></li>
        <li class="submenu-item"><a href="papers.php">Published Papers</a></li>
      </ul>
    </li>
    <li class="menu-item <?php echo $news ? 'active' : ''; ?> parent"><a>Posts</a>
      <ul class="submenu-item-group">
        <li class="submenu-item sub-parent"><a href="news.php">News</a></li>
        <li class="submenu-item"><a href="coming-soon.php">Exam Results</a></li>
        <li class="submenu-item"><a href="coming-soon.php">Entrance List</a></li>
      </ul>
    </li>
    <li class="menu-item <?php echo $gallery ? 'active' : ''; ?> parent"><a>Gallery</a>
      <ul class="submenu-item-group">
        <li class="submenu-item sub-parent"><a href="picture.php">Pictures</a></li>
        <li class="submenu-item"><a href="coming-soon.php">Videos</a></li>
      </ul>
    </li>
    <li class="menu-item <?php echo $about ? 'active' : ''; ?>"><a href="about.php">About</a></li>
  </ul>
</nav>