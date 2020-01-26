<!DOCTYPE html>



<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?=YC_GetOpt('wepMaster')?>

  <link rel="profile" href="http://gmpg.org/xfn/11">

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <? if (is_home()) { ?> 

      <?php $title_home = get_option('s_title_home');

      if(!empty($title_home)){ ?>

        <title><?php echo $title_home; ?></title>

      <?php }else{ ?>

        <title><?php bloginfo('name'); ?></title>

      <?php } ?>

      <?php $description_home = get_option('s_description_home');

      if(!empty($description_home)){ ?>

        <meta name="description" itemprop="description" content="<?php echo $description_home; ?>" />

      <?php }else{ ?>

        <meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>" />

      <?php } ?>

      <?php $tags_home = get_option('s_tags_home');

      if(!empty($tags_home)){ ?>

        <meta name="keywords" itemprop="keywords" content="<?php echo $tags_home; ?>" />

      <?php } ?>

      <link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        

      <!--=== Share TAGS ===-->

      <?php $logo = get_option('logo'); ?>

      <?php if(!empty($logo)) { ?>

      <meta property="og:image" content="<?php echo $logo; ?>" />

      <?php } ?>

      <?php $title_home = get_option('s_title_home');

      if(!empty($title_home)){ ?>

        <meta property="og:title" content="<?php echo $title_home?>" />

      <?php }else{ ?>

      <meta property="og:title" content="<?php bloginfo('name'); ?>" />

      <?php } ?>

      <?php $description_home = get_option('s_description_home');

      if(!empty($description_home)){ ?>

        <meta property="og:description" content="<?php echo $description_home; ?>"/>

      <?php }else{ ?>

        <meta property="og:description" content="<?php bloginfo('description'); ?>"/>

      <?php } ?>

      <meta property="og:type" content="website" />

      <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

      <?php $title_home = get_option('s_title_home');

      if(!empty($title_home)){ ?>

        <meta property="og:site_name" content="<?php echo $title_home; ?>" />

      <?php }else{ ?>

        <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />

      <?php } ?>

  <? }else{ ?> 

    <?php wp_head(); ?>

  <? } ?>    

  <!--- Stylesheet  -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonYSous">

  <link href="https://fonts.googleapis.com/css?family=Lobster|Bangers" rel="stylesheet">

  <?php if(!wp_is_mobile()) {  ?>

    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/Inc/css/animate.min.css">

  <?php  } else { ?>

    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/styleMobile.css">

  <?php } ?>

    <style type="text/css">

      <?require(get_template_directory().'/Inc/css/normalize.css');?>

      <?require(get_template_directory().'/Inc/css/owl.carousel.min.css');?>

      <?require(get_template_directory().'/Inc/css/owl.theme.default.min.css');?>

      @font-face {

        font-family: 'Font Bold';

        font-style: normal;

        font-weight: 700;

        src: url(<?=get_template_directory_uri()?>/Inc/fonts/DroidKufi-Bold.ttf) format('truetype');

      }

      @font-face {

        font-family: 'Font';

        font-style: normal;

        font-weight: 700;

        src: url(<?=get_template_directory_uri()?>/Inc/fonts/DroidKufi-Regular.ttf) format('truetype');

      }

      .team{

        margin-bottom: 30px !important;

        padding-bottom: 0px !important;

        background-position: center!important;

        background-repeat: no-repeat !important;

      }

      .requestbanner {

          background: url(<?=get_template_directory_uri()?>/Inc/img/bg-img.png);

      }
      
      section.services {

          position: relative;

          padding-top: 40px;

          height: auto;

          overflow: hidden;

          padding-bottom: 50px;

      }

    </style>

    <!--- Javascript -->

    <script type="text/javascript">

      <?require(get_template_directory().'/Inc/js/jquery-1.8.2.min.js');?>

      <?require(get_template_directory().'/Inc/js/owl.carousel.min.js');?>

      <?require(get_template_directory().'/Inc/js/wow.min.js');?>

      $(function(){

        $('#video-button').click(function(e){

          event.preventDefault()

          $('.fixed').addClass('active');

          $('.fixed .video').html('<?=YC_GetOpt('videoEmbedCode')?>');

        });

        $('.removeVideo').click(function(){

          $('.fixed').removeClass('active');

          $('.fixed .video  *').remove();

        });

         $('.icons').click(function(){
          $('#search-box').toggleClass('active');

        });

        $('.icons').click(function(){
          $('.searchBox').toggleClass('active');

        });

      

        $('.slider-cursel').owlCarousel({ 

            loop:true,

            autoplay:true,

            nav:false,

            dots:true,

            items:1,

         });
         $('.mainposts').owlCarousel({ 

            loop:true,

            autoplay:true,

            nav:false,

            dots:true,

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

        $('#commentToggle').on('click',function(){

           $('#disqus_thread').slideToggle(450);

            if($(this).find('i').hasClass('fa-plus')){

              $(this).find('i').attr('class','fa fa-minus');

            }else {

              $(this).find('i').attr('class','fa fa-plus');

            }

        });

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

        $(".bars i").click(function(){

          $(".mobile-menu").toggleClass("m-w")

          if(  $(this).attr('class') == 'fa fa-bars' ){

            $(this).attr("class","fa fa-times");

          }else {

            $(this).attr("class","fa fa-bars");

          }

        });

        $('.menu-item-has-children').append("<i class='dsub fas fa-angle-down'></i>");

        $('i.dsub').click(function(){

          $(this).parent().find('ul').slideToggle(300);

        });

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

        $(window).on('scroll',function() {

          if ($(this).scrollTop() > 150) {

            $("#totop").fadeIn();

          } else if ($(this).scrollTop() <= 150) {

            $("#totop").fadeOut();

          }

          if ($(this).scrollTop() > 10) {

            $('[data-src]').each(function(els, el) {

                $(el).attr('src', $(el).data('src'));

                $(el).removeAttr('data-src');

            });

            $('[data-style]').each(function(els, el) {

                $(el).attr('style', $(el).data('style'));

                $(el).removeAttr('data-style');

            });

          }

        });

        $("#totop").click(function(e) {

          e.preventDefault();

          $("html,body").animate({ scrollTop: 0 }, 2000);

        }); 

        $(window).on('scroll', function () {

          var scroll = $(window).scrollTop();
          
          if (scroll < 200) {
          
            $(".hiddenFixedHeader").removeClass('visibleMenu');
          
          } else {
          
            $(".hiddenFixedHeader").addClass("visibleMenu");
          
          }
        
        });


        $('.overlayblockbosts').owlCarousel({   

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

                    items:2,

                },

                1500:{

                    items:2,


                }

            }

            

        }); 
   });



      new WOW().init();

    </script>

 </head>