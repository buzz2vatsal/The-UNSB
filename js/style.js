$(document).ready(function(){
	$(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the
      //nav bar to stick.
    //  console.log($(window).scrollTop())
    if ($(window).scrollTop() > 185) {
      $('#nav_bar').addClass('navbar-fixed');
      $("#nav").addClass('navbar-fixed2');
      $("#down").hide();
    }
    if ($(window).scrollTop() <= 200) {
      $('#nav_bar').removeClass('navbar-fixed');
      $("#nav").removeClass('navbar-fixed2');
      $("#down").show();
    }
  });
$(window).scroll(function(){ 
    if ($(this).scrollTop() > 300) { 
        $('#scroll').fadeIn(); 
    } else { 
        $('#scroll').fadeOut(); 
    } 
});
$('#scroll').click(function(){ 
    $("html, body").animate({ scrollTop: 0 }, 1100); 
    return false; 
});

});

