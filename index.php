<?php get_header(); ?>

	
	<!--------------------------------------------------------------- custom search ---------------------------------------------------------------->

	<div class="customSearchwrapper">
		<div class="customSearch">
		    <form action="<?=home_url()?>/custom" method="POST">
		        <h2 class="wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s"><?=YC_GetOpt('specialSearch')?></h2>
		        <div class="serTaxPost wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.3s">
		            <span><i class="fa fa-chevron-down"></i>اختر  الخدمة</span>
		            <ul>
		                <input type="hidden" name="service">
		                <? foreach( get_categories(array( 'taxonomy'=>'servicePost','hide_empty'=>0 )) as $ser){
		                    ?>
		                    <li data-slug="<?php echo $ser->slug ?>"><?php echo $ser->name ?></li>
		                    <?
		                } ?>
		            </ul>
		        </div>
		        <div class="cityTaxPost wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.3s">
		            <span><i class="fa fa-chevron-down"></i> اختر  المدينة</span>
		            <ul>
		                <input type="hidden" name="city">
		                <? foreach( get_categories(array( 'taxonomy'=>'city','hide_empty'=>0 )) as $city){
		                    ?>
		                    <li data-slug="<?php echo $city->slug ?>"><?php echo $city->name ?></li>
		                    <?
		                } ?>
		            </ul>
		        </div>
		        <button class="special-search wow zoomIn" type="submit">بحث</button>
		    </form>
		</div>

		<div class="cs-img">
	    	<img src="<?=ThemeDirURI?>/Inc/img/Welcome.png">
	    </div>

	</div>




	<!-------------------------------------------------------------- services section -------------------------------------------------------------->

    <div class="service">
    	<div class="container">
    		<div class="serv-title">
    			<h1>خدماتنا </h1>
    			<h2><?=YC_GetOpt('descripe')?></h2>
    		</div>
    		<div class="serv-items">

    			<?php 
                 query_posts(array(
                     'post_type'=>'services', 
                     'posts_per_page'=>3
                )); ?>
                
                <?php 
                   if(have_posts()) {
                      while(have_posts()) {
                         the_post(); 
                ?>

		    		<div class="serv-item">
		    			<div class="serv-imge">
		    				<?the_post_thumbnail()?>
		    			</div>

		    			<div class="serv-content">
		    				<P><?the_title()?></P>
		    			</div>
		    			
		    			<div class="serv-name">
		    				<h2><a href="<?=get_post_meta($post->ID,'titleLink',1)?>"><?=wp_trim_words(get_post_meta($post->ID,'servTitle',1),7,' ')?></a></h2>
		    			</div>
		            </div>

	        	<? } } wp_reset_query(); ?>
	            
    		</div>
    	</div>
    </div>





    <!-- --------------------------------------------------------------call section ---------------------------------------------------------------->

    <div class="call-us">
    	<div class="container">

    		<div class="callingTitle">
    			<h1><?=YC_GetOpt('free')?></h1>
    		</div>
    		
    		<div class="callingButton">
    			<a class="call-button">
	              <i class="fas fa-phone"></i>
	               <span><?=YC_GetOpt('freeTelephone')?></span>
	    		</a>	
    		</div>	
    	
    	</div>
    </div>





	<!--------------------------------------------------------------- blogs section --------------------------------------------------------------->

	<div class="blogs">
		<div class="container">
			<div class="blogg-section-title">
				<h3>مقالتنا</h3>
				<h1>تابع احدث  المقالات </h1>
			</div>
			<div class="blog-posts">
				
				<?php 
				 query_posts(array(
					'post_type'=> 'post',
					'posts_per_page'=> 9
				)); ?>

				<?php 
					if(have_posts()) {
						while(have_posts()) {
							the_post();
				?>

				<div class="blog-post">
					<div class="blog-img">
						<?the_post_thumbnail()?>
					</div>
					<div class="blog-title">
						<a href="<?the_permalink()?>">
							<div class="blog-title">
								<h3><?=wp_trim_words(get_the_title(),15,' ')?></h3>
							</div>	
						</a>				
					</div>
				</div>
				
				<? } } wp_reset_query(); ?>

			</div>
		</div>
	</div>




	<!------------------------------------------------------------- aboutus section ------------------------------------------------------------->

	<div class="aboutcompany">
		<div class="container">
			<div class="right-side">
				<div class="abc-title">
					<h2><?=YC_GetOpt('introductionOurselves')?></h2>
		            <h3><?=YC_GetOpt('introduction')?></h3>		
					<p><?=YC_GetOpt('certifiedTitle')?></p>
				</div>

				<div class="choosess">
					<div class="single-choose">
			            <div class="choose-icon">
			                <i class="fas fa-award"></i>
			            </div>
			            <div class="choose-content">
			                <h4><?=wp_trim_words(YC_GetOpt('context1'),10,' ')?></h4>
			                <p><?=wp_trim_words(YC_GetOpt('expText1'),25,' ')?></p>
			            </div>
		            </div>

		            <div class="single-choose">
			            <div class="choose-icon">
			                <i class="fas fa-award"></i>
			            </div>
			            <div class="choose-content">
			                <h4><?=wp_trim_words(YC_GetOpt('context2'),10,' ')?></h4>
			                <p><?=wp_trim_words(YC_GetOpt('expText2'),25,' ')?></p>
			            </div>
		            </div>

		            <div class="single-choose">
			            <div class="choose-icon">
			                <i class="fas fa-award"></i>
			            </div>
			            <div class="choose-content">
			                <h4><?=wp_trim_words(YC_GetOpt('context3'),10,' ')?></h4>
			                <p><?=wp_trim_words(YC_GetOpt('expText3'),25,' ')?></p>
			            </div>
		            </div>

		            <div class="single-choose">
			            <div class="choose-icon">
			                <i class="fas fa-award"></i>
			            </div>
			            <div class="choose-content">
			                <h4><?=wp_trim_words(YC_GetOpt('context4'),10,' ')?></h4>
			                <p><?=wp_trim_words(YC_GetOpt('expText4'),25,' ')?></p>
			            </div>
		            </div>
				</div>
			</div>

			<div class="left-side">
		      	<div class="left-side-img">
		      		<img src="<?=YC_GetOpt('ImgLeftSide')?>">
		        </div>
		    </div>
		
		</div>
	</div>



  <!------------------------------------------------------------------- Last News ----------------------------------------------------------------->

	  <div class="lastnews">
	  	<div class="container">
	  		<div class="lastnews-title">
	  			<h1><?=YC_GetOpt('checkedPosts')?></h1>
	  		</div>
	  		<div class="mainposts owl-carousel owl-theme">

	  			<?php 
	  				query_posts(array(
	  				'post_type' => 'post',
	  				'posts_per_page' => 6 ,
	  				'meta_key' => 'fixed'
	  			)); ?>

	  				<? if(have_posts()) :
	  					while(have_posts()) :
	  						the_post();
	  				?>

					  		<div class="mainpost">
					  			<a href="<?the_permalink()?>">
						  			<div class=mpimage>
						  				<?the_post_thumbnail()?>
						  			</div>
						  			 <div class="mpcontent">
						  			 	<div class="datee">
						  			 		<span><?=get_the_date()?></span>
						  			 	</div>
						  			 	<div class="mpctitle">
						  			 		<h1><?=wp_trim_words(get_the_title(),15,' ')?></h1>
						  			 	</div>
						  			 	<div class="mpdec">
						  			 		<p><?=wp_trim_words(get_the_content(),100,' ')?></p>
						  			 	</div>
						  			 </div>
					  			 </a>
					  		</div>
					<?
					  	endwhile;
					   endif;
					wp_reset_query();
					
					?>
	  		</div>

	  	</div>
	  </div>

<?php  get_footer(); ?>