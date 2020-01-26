<!DOCTYPE PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html <?php language_attributes(); ?>>
<? require(ThemeURI.'/Interface/Header/head.php'); ?>

    <body>
        <section class="wrapper">
            <div class="top-header">
                <div class="container">
                    <div class="logo">
                        <a href="<?=home_url()?>">
          			   				  <img src="<?=get_option('loGo')?>">
          			   			</a>                  
			   			      </div>

			   			      <? if(wp_is_mobile()) { ?>
				              <span class="bars">
				                  <i class="fa fa-bars"></i>
				              </span>
			              <? } ?>

                    <div class="memu">
                        <nav>
                            <?php
      			                  wp_nav_menu ( array(  
      			                  'theme_location'  => 'main-menu',  
      			                  'menu_class'      => '',  
      			                  'echo'            => true,  
      			                  'fallback_cb'     => 'wp_page_menu',  
      			                  'before'          => '',  
      			                  'after'           => '',  
      			                  'link_before'     => '',  
      			                  'link_after'      => '',  
      			                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
      			                  'depth'           => 0,  
      			                  'walker'          => '' 
      			                  ) );  
        			              ?>
                        </nav>
                    </div>

                    <div class="mobile-menu">
                          <div>
                            <? if(wp_is_mobile()) { ?>
                            <? } ?>
                            <?php
                                wp_nav_menu ( array(  
                                'theme_location'  => 'mobile-menu',  
                                'menu_class'      => '',  
                                'echo'            => true,  
                                'fallback_cb'     => 'wp_page_menu',  
                                'before'          => '',  
                                'after'           => '',  
                                'link_before'     => '',  
                                'link_after'      => '',  
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                                'depth'           => 0,  
                                'walker'          => '' 
                                ) );  
                                ?>
                          </div>
                    </div>

                    <div class="h-social">
                        <ul class="socialHeader">
                            <li><a href="<?php echo get_option('facebook'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo get_option('twitter'); ?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo get_option('youtube'); ?>"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="<?php echo get_option('linked-in'); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>

                    <div class="icondiv">
                        <a class="icons" href="javascript:void(0);">
        		              <i class="fas fa-search"></i>
        		            </a>
		                </div>

		              <div class="searchBox">
        			        <form action="<?php echo home_url();?>">
        			          <input type="text" name="s" id="s" placeholder="ابحث عما تريد" class="anotherPages">
        			          <button type="submit"> <i class="fa fa-search"></i>
        			          </button>
        			        </form>
        		      </div>

              </div>
          </div>

       <!-- hero slider--->

        <div class="hero">
           	<?php if(is_home()){ ?>
           	 	<div class="slider">

                    <section class="fixed">

                        <div class="removeVideo"></div>

                        <div class="video"></div>

                    </section>

             	 		<div class="slider-cursel owl-carousel owl-theme ">
         	 			 
                 <?php 
    				      query_posts( array('post_type'=>'slider','posts_per_page'=>10) );
  				         if(have_posts()):
  				          while(have_posts()):
    				            the_post();
    				             ?>
               	 			<div class="slider-item" style="background-image: url(<?the_post_thumbnail_url()?>)">
               	 				<span class="c-name">مؤسسه الدعيجي</span>
               	 				<h2><?the_title()?></h2>
                	 		</div>
            	 	     <?
    		          endwhile;
    		         endif;
    		         wp_reset_query();
    		          ?>

             	 	</div>

             	 		<div class="v-button">
             	 			<a  id="video-button" href="">شاهد الفيديو <i class="far fa-play-circle"></i></a>
             	 		</div>
           	 	</div>
           	 
            <? }?>

          </div>