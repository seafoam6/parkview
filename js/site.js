(function(){
jQuery(document).ready(function($) {
    var slides = $('.hero .slide');
    var totalSlides = slides.length -1, currentSlide=0;
    var hideOthers =function(){
      $(slides[currentSlide]).siblings().hide();
    };
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
    },5000);  
});
})();