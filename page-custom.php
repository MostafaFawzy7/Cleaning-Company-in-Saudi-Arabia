<?php  get_header() ?>
<?php  wp_reset_query(); ?>
<?
 $args = array('post_type'=>'post');

 if( isset($_POST['service']) && $_POST['service'] !=''){
  $args['servicePost']  = $_POST['service'];
 }

  if( isset($_POST['city']) && $_POST['city'] !=''){
  $args['city']  = $_POST['city'];
 }


?>
<div class="page-blog">

  <div class="container">
    <h2> نتائج البحث عن / <? echo get_term_by('slug',$_POST['service'],'servicePost')->name ?>-<? echo get_term_by('slug',$_POST['city'],'city')->name ?></h2>
        <?php 
    if( ! wp_is_mobile() ) {
    if( get_option( 'blog_1' ) !='' ):
    echo '<center>'.get_option( 'blog_1') . '</center>';
    endif;
    } else {
    if( get_option( 'blog_1_mob' ) !='' ):
    echo '<center>'.get_option( 'blog_1_mob') . '</center>';
    endif;
    } ?>
    <div class="allBlogs">
      <?php 
            query_posts($args);
            if(have_posts()):
               $i = 0;
              while(have_posts()):
                the_post(); ?>
                <div class="blog wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="<?=$i?>s">
                   <a href="<?php the_permalink( ) ?>">
                  <div class="image wow zoomIn">
                    <?if(has_post_thumbnail()) { ?>
                      <?the_post_thumbnail()?>
                    <? } else { ?>
                      <img src="<?=YC_GetOpt('defultImg')?>">
                    <? } ?>
                    <span class="cat">
                      <?php foreach(array_slice(get_the_terms($post->ID,'category',1),0,2) as $cat): 
                                       echo $cat->name . ' ';
                        endforeach;  ?>
                    </span>
                    <span class="link">
                      <i class="fa fa-link"></i>
                    </span>
                  </div>
                  <div class="dtl">
                    <h2 class="wow fadeInRight"><?the_title();?></h2>
                    <p class="wow fadeInRight"><?=wp_trim_words(get_the_content(),15,' .. ')?></p>
                  </div>
                   </a>
                </div>
                <?
                $i = $i + 0.2;
              endwhile;
                else:
                echo '<div class="noResults">لا توجد نتائج بحث</div>';
            endif;
            wp_reset_query();
      ?>
    </div>
     <div class="pagination">
        <?=YC_SearchPagination();?>
     </div>
    

  </div>
        <?php 
  if( ! wp_is_mobile() ) {
  if( get_option( 'blog_2' ) !='' ):
  echo '<center>'.get_option( 'blog_2') . '</center>';
  endif;
  } else {
  if( get_option( 'blog_2_mob' ) !='' ):
  echo '<center>'.get_option( 'blog_2_mob') . '</center>';
  endif;
  } ?>

</div>
<?php get_footer() ?>