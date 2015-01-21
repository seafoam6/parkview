jQuery(document).ready(function($) {
    var slides = $('.hero .slide');
    var totalSlides = slides.length;
    // for (var i =0; i<= totalSlides; i++){
    //   $()
    // }
    $.each(slides,function(index,el){
      console.log(index + " "+el);
    });

    console.log($(slides));
    $(slides[1]).css('opacity',1);
});
