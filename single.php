<?php get_header(); ?>
<? wpb_set_post_views($post->ID) ?>
<?php wp_reset_query() ?>
<section class="single">
  <div style="overflow: hidden;">
      <?if(get_post_meta($post->ID,'coverTop',1)) { ?>
          <div class="coverTop" style="background-image: url(<?=get_post_meta($post->ID,'coverTop',1);?>);">
              <div class="Top-title wow fadeInRight"><h1><?the_title()?></h1></div>  
  <?= dez_schema_breadcrumb() ?>
          </div>
      <? } elseif(has_post_thumbnail()) { ?>
          <div class="coverTop" style="background-image: url(<?the_post_thumbnail_url()?>);">
              <div class="Top-title wow fadeInRight"><h1><?the_title()?></h1></div>  
  <?= dez_schema_breadcrumb() ?>
          </div>
      <? } else { ?>
          <div class="coverTop" style="background-image: url(<?=YC_GetOpt('defultImg')?>);">
              <div class="Top-title wow fadeInRight"><h1><?the_title()?></h1></div>  
  <?= dez_schema_breadcrumb() ?>
          </div>
      <? } ?>
  </div>

	
	<div class="container clearfix">
		<div class="rightSide">
			<div class="single-cover">

				<? if(has_post_thumbnail()) { ?>
					 <div class="cover wow fadeInUp" style="background-image: url(<?the_post_thumbnail_url()?>);"></div>
         <? } else { ?>
          <div class="cover wow fadeInUp" style="background-image: url(<?=YC_GetOpt('defultImg')?>);"></div>
            
         <? } ?>

          <div class="infoContent">

              <!-- <div class="author">
                  <div class="authorImage  wow fadeInRight">
                    <img src="<?=get_post_meta($post->ID,'authorImg',1);?>">  
                  </div>
                  <div class="authorName  wow fadeInRight">
                      <?=get_the_author();?>              
                  </div>
              </div> -->

              <div class="getDate wow fadeInRight"><i class="far fa-clock"></i> <?=get_the_date()?></div> 
              
              <? if(!empty(get_the_terms($post->ID,'category',''))){ ?>
                <div class="catgs  wow fadeInRight">
                  <? foreach( get_the_terms($post->ID,'category','')  as $cat){ ?>
                    <a href="<?=get_term_link($cat)?>"><?=$cat->name?></a>
                  <? } ?>
                </div>
              <? } ?>

          </div>

            <?php if (get_post_meta($post->ID,'telephone',1) != '' ) {?>
              <div class="teleCont">
                  <div class="telephone">
                    <a href="tel:<?=get_post_meta($post->ID,'telephone',1);?>"><i class="fas fa-phone"></i> إتصل بنا </a>
                  </div>
                  <span class="hiddenNumber"><?=get_post_meta($post->ID,'telephone',1);?></span>
              </div> 
            <? } ?>

					<div class="single-title">
						
		           		<div class="social-shares">
		                  <ul>
		                      <li class="social-facebook wow fadeInRight">
		                          <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank">
		                              <i class="fab fa-facebook-f"></i>
		                          </a>
		                      </li>
		                      
		                      <li class="social-twitter wow fadeInRight">
		                          <a href="http://twitter.com/share?url=<? the_permalink(); ?>" target="_blank">
		                              <i class="fab fa-twitter"></i>
		                          </a>
		                      </li>
		                      
		                      <li class="social-google wow fadeInRight">		
		                          <a href="https://plus.google.com/share?url=<? the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
		                              <i class="fab fa-google-plus-g"></i>
		                          </a>					
		                      </li>
		                      
		                      <li class="social-whatsapp wow fadeInRight">
		                          <a href=https://web.whatsapp.com://send?text=<? the_title(); ?> - <? the_permalink(); ?>>
		                              <i class="fab fa-whatsapp"></i> 
		                          </a>
		                      </li>
		                      
		                      <div class="clr"></div>
			                </ul>

			            </div>
                          <? if(function_exists('the_ratings')){the_ratings();} ?>

					</div>
				</div>


				<? if(!empty(get_the_terms($post->ID,'post_tag',''))){ ?>
					<div class="keywords  wow fadeInRight">
						<? foreach( get_the_terms($post->ID,'post_tag','')  as $term){ ?>
							<a href="<?=get_term_link($term)?>"><?=$term->name?></a>
						<? } ?>
					</div>
				<? } ?>
				
				<div class="single-content wow fadeInRight"><?the_content()?></div>

        <div class="separator"></div>

        <div class="Inner-single" id="CatBox">    
            <div  class="singlePane active">
              <div class="side-title  wow fadeInRight"><h3>مقالات ذات صله</h3></div>
                <div class="articles view1  wow fadeInRight">
                  <div class="allarticle owl-carousel owl-theme">
                        <? foreach (get_posts(array('post_type'=>'post','posts_per_page'=>9)) as $post) { setup_postdata($post); ?>
                          <div class="article">
                              <a href="<? the_permalink(); ?>" title="<? the_title(); ?>">
                                <?if(has_post_thumbnail()) { ?>
                                   <div class="img-elem"><?=get_the_post_thumbnail();?></div>
                                <? } else { ?>
                                    <div class="img-elem"><img src="<?=YC_GetOpt('defultImg')?>"></div>
                                <? } ?> 
                                 <div class="title"><? the_title(); ?></div>
                                 <div class="time">
                                    <i class="far fa-clock"></i>
                                    منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?>
                                 </div>
                              </a>
                          </div>
                        <? } ?>
                  </div>
                </div>
            </div>
        </div>
			
		</div>

		

         <div class="left">

             <div class="facPage">
             <div class="fb-page"
                  data-href="<?php echo get_option('facePage'); ?>"
                  data-width="340"
                  data-hide-cover="false"
                  data-show-facepile="true"></div>
            </div>

          <?php 
              foreach (array_slice(get_the_terms($post->ID,'category' , 1),0,1) as $cat) {
                $catid = $cat->term_id;
                $catname = $cat->name; 
              }
            ?>

           <h3> <i class="fa fa-cog"></i> القائمة الجانبية <?php echo $catname ?></h3> 

           <div class="single-tabs">
                <ul class="tabs">
                   <li data-id="#views" class="tab active">مميز</li>
                   <li data-id="#latest" class="tab">الأحدث</li>
                   <li data-id="#common" class="tab">ذات صلة</li>
                </ul>
            </div>

           <ul class="sideList tabsUl" id="views">
             <?php 
                 query_posts(array(
                     'post_type'=>'post', 
                       'meta_key'=>'views',
                       'orderby'=>'meta_value_num',
                      'posts_per_page'=>5
                      )); ?>
                <?php 
                   if(have_posts()) {
                      while(have_posts()) {
                         the_post(); ?>
                        <li class="wow fadeInUpBig">
                            <a href="<? the_permalink(); ?>">
                               <div class="image">
                                <?if(has_post_thumbnail()) { ?>
                                  <img src=" <?php the_post_thumbnail_url() ?>" alt="<?the_title()?>" title="<?the_title()?>">
                                <? } else { ?>
                                  <img src="<?=YC_GetOpt('defultImg')?>">
                                <? } ?>  
                               </div>
                               <h2><? the_title(); ?></h2>
                                 <span class="cats">
                                    <i class="far fa-clock"></i> <?=get_the_date()?>
                                 </span>
                                  
                              </a>
                        </li> 
                <? } } wp_reset_query(); ?>
          </ul>
           <ul class="sideList tabsUl" id="latest" style="display: none">
             <?php 
                 query_posts(array(
                     'post_type'=>'post', 
                      'posts_per_page'=>5
                      )); ?>
                <?php 
                   if(have_posts()) {
                      while(have_posts()) {
                         the_post(); ?>
                        <li class="wow fadeInUpBig">
                            <a href="<? the_permalink(); ?>">
                               <div class="image">
                                <?if(has_post_thumbnail()) { ?>
                                  <img src=" <?php the_post_thumbnail_url() ?>" alt="<?the_title()?>" title="<?the_title()?>">
                                <? } else { ?>
                                  <img src="<?=YC_GetOpt('defultImg')?>">
                                <? } ?> 
                               </div>
                               <h2><? the_title(); ?></h2>
                                 <span class="cats">
                                    <i class="far fa-clock"></i> <?=get_the_date()?>
                                 </span>
                                  
                              </a>
                        </li> 
                <? } } wp_reset_query(); ?>
          </ul>
           <ul class="sideList tabsUl" id="common" style="display: none">
             <?php 
                 query_posts(array(
                      'post_type'=>'post', 
                      'orderby' => 'rand',
                      'cat'=> $catid,
                      'posts_per_page'=>5
                      )); ?>
                <?php 
                   if(have_posts()) {
                      while(have_posts()) {
                         the_post(); ?>
                        <li class="wow fadeInUpBig">
                            <a href="<? the_permalink(); ?>">
                               <div class="image">
                                <?if(has_post_thumbnail()) { ?>
                                   <img src=" <?php the_post_thumbnail_url() ?>" alt="<?the_title()?>" title="<?the_title()?>">
                                <? } else { ?>
                                  <img src="<?=YC_GetOpt('defultImg')?>">
                                <? } ?> 
                               </div>
                               <h2><? the_title(); ?></h2> 
                                 <span class="cats">
                                    <i class="far fa-clock"></i> <?=get_the_date()?> 
                                 </span>
                                  
                              </a>
                        </li> 
                <? } } wp_reset_query(); ?>
          </ul>
           
           <script type="text/javascript">
             $('.tabs li').click(function(){
              $(this).addClass('active').siblings().removeClass('active');
                $( $(this).data('id') ).fadeIn(300).siblings('ul.tabsUl').fadeOut(300);
             })
           </script>


            <?php 
            if( get_option( 'SinglePages_2' ) !='' ):
              echo '<center>'.get_option( 'SinglePages_2') . '</center>';
            endif;
              ?>
          <h3><i class="fa fa-cog"></i> مقالات مختارة</h3>
            <ul class="sideList">
             <?php 
                 query_posts(array(
                     'post_type'=>'post', 
                      'orderby' => 'rand',
                      'posts_per_page'=>5
                      )); ?>
                <?php 
                   if(have_posts()) {
                      while(have_posts()) {
                         the_post(); ?>
                        <li class="wow fadeInUpBig">
                            <a href="<? the_permalink(); ?>">
                               <div class="image">
                                <?if(has_post_thumbnail()) { ?>
                                 <img src=" <?php the_post_thumbnail_url() ?>" alt="<?the_title()?>" title="<?the_title()?>">
                                <? } else { ?>
                                  <img src="<?=YC_GetOpt('defultImg')?>">
                                <? } ?>
                               </div>
                               <h2><? the_title(); ?></h2>
                                <span class="views">
                                 <i class="fa fa-eye"></i> 
                                  <?=(get_post_meta($post->ID,'views',1) == '' ? 0 : get_post_meta($post->ID,'views',1))?>
                                 </span>
                                 <span class="cats">
                                  <i class="fa fa-cogs"></i>
                                 <?php foreach( array_slice(get_the_terms($post->ID,'category',1),0,1) as $cat) {
                                   echo $cat->name;
                                 } ?>
                                   
                                 </span>
                                  
                              </a>
                        </li> 
                <? } } wp_reset_query(); ?>
          </ul>

      </div>

	</div>
</section>

<?php get_footer(); ?>