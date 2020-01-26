$(function(){
/////////////////////////////////////////////////////////////////////////

    /*
      ----------------------
      Search-Button
       ---------------------
     */

     $('.icons').click(function(){
        $('#search-box').toggleClass('active');
     });

/*
      ----------------------
      news-Slider
       ---------------------
     */

     $('.n-slider').owlCarousel({
          
          loop:true,
          autoplay:true,
          nav:true,
          dots:false,
          responsive:{
        0:{
            items:1,
            nav:true
        },
        768:{
            items:3,
            nav:true
        },
        1500:{
            items:4,
            nav:true,
            loop:true
        }
    }
    
    });

/*
      ----------------------
      main-Slider
       ---------------------
     */

    $('.mySlider').owlCarousel({
          
          loop:true,
          autoplay:true,
          nav:true,
          dots:false,
          items:1,
    
     });

     $('.slider span.next').click(function(){
       $('.slider .owl-next').click();
     });
     $('.slider span.prev').click(function(){
       $('.slider .owl-prev').click();
     });
      



  $('.owl-prev').html('<i class="fas fa-chevron-left"></i>')

  $('.owl-next').html('<i class="fas fa-chevron-right"></i>')


   
////////////////////////////////////////////////////////

///// Comment Toggle (single page) :

      $('#commentToggle').on('click',function(){
         $('#disqus_thread').slideToggle(450);
          if($(this).find('i').hasClass('fa-plus')){
            $(this).find('i').attr('class','fa fa-minus');
          }else {
            $(this).find('i').attr('class','fa fa-plus');
          }
      });


/////////////////////////////////////////////////////////


// Slider Of Single Page Related Articles :

$('.allarticle').owlCarousel({
          
          loop:true,
          autoplay:true,
          nav:false,
          dots:true,
          responsive:{
        0:{
            items:1,
        },
        500:{
            items:2,
        },
        768:{
            items:3,
        },
        1500:{
            items:3,
            loop:true
        }
    }
    
  }); 

/////////////////////////////////////////////////////////////////////////
/*
      ----------------------
      mobile menu toggle
       ---------------------
     */

$(".bars i").click(function(){
  $(".mobile-menu").toggleClass("m-w")
  if(  $(this).attr('class') == 'fa fa-bars' ){
    $(this).attr("class","fa fa-times");
  }else {
    $(this).attr("class","fa fa-bars");
  }
  

});
$(function(){
    $('.menu-item-has-children').append("<i class='dsub fas fa-angle-down'></i>");
    $('i.dsub').click(function(){
      $(this).parent().find('ul').slideToggle(300);
    });
});






$(function(){


  /////custom search
$('.customSearch span').click(function(){
    $(this).siblings('ul').toggleClass('active');
  });

  $('.customSearch li').click(function(){

      var slug = $(this).data('slug');
      var name = $(this).text();
      $(this).parent().prev().html('<i class="fa fa-chevron-down"></i>'+name);
      $(this).siblings('input').val(slug);
      $(this).parent().removeClass('active'); 
  });


});
});

$(function(){

$(window).on('scroll', function () {
  var scroll = $(window).scrollTop();
  if (scroll < 300) {
    $(".fixedHeader").removeClass("sticky-menu");
  } else {
    $(".fixedHeader").addClass("sticky-menu");
  }
});
});
