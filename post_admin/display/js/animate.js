$(document).ready(function () {

  $('nav .parent').click(function (event) {
    event.stopPropagation();
    $(this).children('.submenu-item-group').fadeToggle(100);
    $('nav .parent').not(this).children('.submenu-item-group').fadeOut(100);
  });
  $(document).click(function () {
    $('.submenu-item-group').fadeOut(100);
  });

  $('.open-menu').click(function () {
    $('.menu-item-group').fadeIn(100);
    $('.menu-item-group').css('right','0');
  });
  $('.close-menu').click(function () {
    $('.menu-item-group').fadeOut(700);
    $('.menu-item-group').css('right','-100%');
  });

  $('.open-modal').click(function () {
    var t = $(this).attr('target');
    t = '#' + t;
    $(t).parent('.modal').fadeIn();
    $(t).fadeIn(100);
    $(t).css('top','50px');
  });
  $('.close-modal').click(function () {
    $('.modal').fadeOut();
    $('.modal-box').fadeOut(700);
    $('.modal-box').css('top','-100%');
  });

  $('.open-light-box').click(function () {
    var d = $(this).attr('data');
    $('<img/>').prependTo('.light-box');
    $('.light-box').children('img').attr('src',d);
    var dw = $(window).width();
    var dh = $(window).height();
    var lbImg = $('.light-box').children('img');
    lbImg.load(function () {
      $('.modal').fadeIn(1000);
      lbImg.css('width','90%');
      var ih = lbImg.height();
      if(ih > dh) {
        lbImg.css('height','90%');
        lbImg.css('width','auto');
      }
      $('.light-box').css('top','0');
      $('.light-box').children('.close-light-box').fadeIn(10);
    });
  });
  $('.close-light-box').click(function () {
    $('.modal').fadeOut(700);
    $('.light-box').css('top','-100%');
    $('.light-box').children('img').fadeOut(1000, function () {
      $(this).remove();
    });
    $('.light-box').children('.close-light-box').fadeOut(10);
  });

  /*====================CUSTOM SCRIPT START HERE====================*/

  $(window).load(function() {
    $('.loader').fadeOut(100, function () {
      $('.wrapper').fadeIn(100);
      $('.nav-fixed').css('top','0');
      $('.hero-title').fadeIn(1500);
      $('#loginPage .login-box').fadeIn(100, function () {
        $('#loginPage .login-box').css('top','50%');
      });
    });
  });

  window.addEventListener("scroll", yScroll);

  chartData(chartType="#faculty");
  chartData(chartType="#level");
  
  function chartData(chartType){
    var n = $(chartType).children('.single-bar-chart').children('.data').length;
    var total = $(chartType).children('.single-bar-chart').attr('data');
    for(i=1; i<=n; i++) {
      var className = ".data" + i;
      var d = $(chartType).children('.single-bar-chart').children(className).attr('data');
      var perc = ((d / total) * 100) + "%";
      $(chartType).children('.single-bar-chart').children(className).css('width', perc);
    }
  }

  $('.hook-up').click(function () {
    $('html, body').animate({ scrollTop: $(".welcome-section").offset().top-60}, 'slow');
  });

  $('.play-circle').click(function () {
    var target = $(this).prev('video').children('source').attr('src');
    window.location = target;
  });

  var yPos;
  function yScroll(){
    yPos = window.pageYOffset;

    if(yPos > 0) {
      $('nav').removeClass('nav-transparent');
    }
    else {
      $('nav').addClass('nav-transparent');
    }

    if(yPos > 400){
  		$('.go-to-up').fadeIn('slow');
  	} else {
  		$('.go-to-up').fadeOut('slow');
  	}

    var welcomePos = $('.hero-img').height();
    welcomePos /= 2;
    var newsPos = $('.hero-img').height() + $('.welcome-section').height() + $('.event-section').height() + $('.headProf-section').height()/2;
    if(yPos > welcomePos) {
      $('.section .left').css('left','0');
      $('.section .right').css('right','0');
    }
    if(yPos > newsPos) {
      $('.news-section .flex-item:first-child').addClass('animate5');
      $('.news-section .flex-item:first-child').next().addClass('animate2');
      $('.news-section .flex-item:last-child').addClass('animate4');
      $('.news-section .flex-item').css('transform','scale(1,1)');
    }

  }

  $('.go-to-up').click(function(){
    $('html,body').animate({ scrollTop: 0}, 'slow');
  });

  var color = ['cover1', 'cover2', 'cover3'];
  var i = 1;
  setInterval(function(){
    $('.hero-img').css('background-image', 'url(stock-img/'+color[i]+'.jpg)');
    i++;
    if(i == 3) {
      i=0;
    }
  }, 7500);

  var eventContent = ['.event3', '.event2', '.event1'];
  var curr = 1;
  var next = 2;
  setInterval(function(){
    $('.event-section .overlay .container').children(eventContent[curr]).fadeOut('slow',function () {
      $('.event-section .overlay .container').children(eventContent[next]).fadeIn('slow');
    });
    curr = next;
    next++;
    if(next == 3) {
      next=0;
    }
  }, 3000);

  $('.show-expired-event').click(function () {
    $('#eventPage .upcoming-event-container').fadeOut(function () {
      $('#eventPage .expired-event-container').fadeIn();
    });
  });
  $('.show-upcoming-event').click(function () {
    $('#eventPage .expired-event-container').fadeOut(function () {
      $('#eventPage .upcoming-event-container').fadeIn();
    });
  });

});
