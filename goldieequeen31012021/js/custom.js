$(document).ready(function(){
    $('.slider .slider__content').bxSlider({
        mode: 'fade',
        nextText: '&rsaquo;',
        prevText: '&lsaquo;',
        pager: false,
        auto:true,
        touchEnabled: false,
        onSliderLoad: function() {
            $(this).parent('.bx-viewport').after('<div class="pager"><span class="curr-item">'+viewOfNumber(this.getCurrentSlide()+1)+'</span>'+viewOfNumber(this.getSlideCount())+'</div>');
            
            $(this).parents('.slider').css('visibility', 'visible');
        },
        onSlideAfter: function($slideElement, oldIndex, newIndex) {
            $(this).parent('.bx-viewport').next('.pager').find('.curr-item').text(viewOfNumber(newIndex+1));
        }
    });
    
    function viewOfNumber(n) {
        return (n < 10 ? "0" : "") + n;
    }

    $(function() {
        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });
	// $('.wall__fame__slider').bxSlider({
    //     minSlides: 4,
    //     maxSlides: 4,
    //     slideWidth: 850,
    //     slideMargin: 0,
    //     auto:true,
    //     responsive:true
    //   });
    if ($(window).width() < 768) {
        $(".wall__fame__slider").bxSlider({
        pager:false,
        controls:true,
        auto:true,
        speed: 1500,
        minSlides: 2,
        maxSlides: 2,
        slideWidth: 700,
        slideMargin: 0,
        touchEnabled:false  
  });

    }else {

        $(".wall__fame__slider").bxSlider({
         minSlides: 4,
         maxSlides: 4,
         slideWidth: 850,
       slideMargin: 0,
        auto:true,
         responsive:true,
        touchEnabled:false  

  });
    }

    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
        $(e.target)
          .prev()
          .find("i:last-child")
          .toggleClass("fa-minus fa-plus");
      });
});