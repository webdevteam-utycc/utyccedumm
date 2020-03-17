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
    <title>UT-YCC | Exam Results</title>
    <style media="screen">
      .select {
        height: 40px;
        margin-bottom: 10px;
        display: inline-block;
        position: relative;
        border-radius: 10px;
      }
      .option {
        position: absolute;
        top: 100%;
        left: 0;
        background: #fff;
        width: 100%;
        padding: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        -o-box-sizing: border-box;
        box-sizing: border-box;
        display: none;
      }
      .option label {
        padding: 5px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        width: 100%;
        display: block;
        cursor: pointer;
      }
      .option label:last-child {
        border-bottom: 0;
      }
      .select .option .hide {
        display: none;
      }
    </style>
  </head>
  <body id="loginPage">
    <div class="loader">
      <span class="circle1"></span>
      <span class="circle2"></span>
      <span class="circle3"></span>
      <span class="circle4"></span>
    </div>
    <div class="wrapper">
      <div class="overlay">
        <div class="login-box">
          <form class="ui-form" action="index.html" method="post">
            <div class="form-row">
              <h4>Select Academic Year and Major</h4>
              <div class="select">
                <button class="btn btn-simple openOpt" type="button" name="button"><label class="acbtnLabel">Academic Year</label> <span class="ui-icons arrows-1_minimal-down"></span></button>
                <div class="option">
                  <label class="ayValue year" data="1">First Year</label>
                  <label class="ayValue" data="2">Second Year</label>
                  <label class="ayValue" data="3">Third Year</label>
                  <label class="ayValue" data="4">Fourth Year</label>
                  <label class="ayValue" data="5">Fifth Year</label>
                </div>
              </div>
              <div class="select">
                <button class="btn btn-simple openOpt" type="button" name="button"><label class="mbtnLabel">Major</label> <span class="ui-icons arrows-1_minimal-down"></span></button>
                <div class="option">
                  <label class="mValue junior major" data="ict">ICT</label>
                  <label class="mValue senior hide" data="ist">IST</label>
                  <label class="mValue senior hide" data="ce">CE</label>
                  <label class="mValue junior senior" data="ece">EcE</label>
                  <label class="mValue junior senior" data="pre">PrE</label>
                  <label class="mValue junior senior" data="ame">AME</label>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-round view-result-btn" type="button" name="button">View Result</button>
            <button onclick="history.back();" class="btn btn-primary btn-link" type="button" name="button">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script src="js/jquery.js" charset="utf-8"></script>
  <script src="js/animate.js" charset="utf-8"></script>
  <script type="text/javascript">
    var click = 0;
    $('.ayValue').click(function () {
      click++;
      var showData = $(this).html();
      $(this).parent().prev().children('.acbtnLabel').html(showData);
      $(this).parent().slideUp(100);
      $('.ayValue').removeClass('year');
      $(this).addClass('year');
      var ayv = $(this).attr('data');
      if (ayv < 3) {
        $('.senior').hide(0);
        $('.junior').css('display','block');
      }
      else {
        $('.junior').hide(0);
        $('.senior').css('display','block');
      }
    });
    $('.mValue').click(function () {
      click++;
      var showData = $(this).html();
      $(this).parent().prev().children('.mbtnLabel').html(showData);
      $(this).parent().slideUp(100);
      $('.mValue').removeClass('major');
      $(this).addClass('major');
    });
    $('.view-result-btn').click(function () {
      click++;
      var pn = $('.year').attr('data');
      pn = pn + $('.major').attr('data') + '.html';
      if (click < 3) {
        window.location='examResult.php';
      }
      else {
        window.location=pn;
      }
    });

    $('.openOpt').click(function () {
      $(this).next('.option').slideToggle(100);
    });
  </script>
</html>
