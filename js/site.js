(function(){
  $=jQuery;
jQuery(document).ready(function($) {
  //slider
    var slides = $('.hero .slide'),
        slideTime,
        totalSlides = slides.length -1, 
        currentSlide=0,
        hideOthers =function(){
          $(slides[currentSlide]).siblings().hide();
        };

    //get slide timer
    if ($('[data-slidetime]')){
      slideTime = $('[data-slidetime]').data('slidetime');
    }else{
      slideTime = 5000;
    }


    hideOthers();

    var incrementSlide = function(){
      if (currentSlide < totalSlides){
        currentSlide++;
      } else{
        currentSlide=0;
      }
    };
    var changeSlide = function(){
      $(slides[currentSlide]).css({'z-index':1});
      if (currentSlide == totalSlides){
        $(slides[0]).css({'z-index':2}).fadeIn(500,hideOthers());
      }else{
        $(slides[currentSlide+1]).css({'z-index':2}).fadeIn(500,hideOthers());
      }
      incrementSlide();
    };
    setInterval(function(){
      changeSlide();
     //$(slides[1]).fadeIn(500);
    },slideTime);  

    //about section

    
    
});
})();


(function(){
  $=jQuery;
jQuery(document).ready(function($) {
var re = /Parkview Magazine/gi;
    var str = $('#about').html();
    
    var switchTo = '<span class=\"namesake\">Pakview Magazine</span>';

    var newText = str.replace(re,switchTo );

    $('#about').html(newText);
});
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
})();