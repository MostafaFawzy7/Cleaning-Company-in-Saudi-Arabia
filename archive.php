<?php  get_header() ?>
<?php wp_reset_query(); ?>
<!--  This Method return all information about this taxonomy -->
<? $obj  = get_queried_object() ?>
<section class="news archive">
        <div class="container">
            <h2 class="news-title wow fadeInRight"><?=$obj->name?></h2>
            <h1 class="newsWord-title wow fadeInLeft"><?=YC_GetOpt('news')?></h1>
            <div class="all-news">
                <div class="container2 flex">
                    <?php 
	             if(have_posts()):  $i=0;  while(have_posts()) :  the_post(); ?>
                        <div class="news-section">
                            <div class="one-article wow fadeInRight">
                                <div class="look">
                                    <?if(has_post_thumbnail()) { ?>
                                        <img src="<?the_post_thumbnail_url('news')?>">
                                    <? } else { ?>
                                        <img src="<?=YC_GetOpt('defultImg')?>">
                                    <? } ?>
                                    <? foreach(get_the_terms($post->ID,'category','') as $cat ) { ?>
                                        <a href="<?=get_term_link($cat);?>"><?=$cat->name?></a>
                                        <? } ?>
                                        <a href="<?=get_post_meta($post->ID,'commentLink',1);?>"><?=get_post_meta($post->ID,'num',1);?>
                                        	<i class="far fa-comment-alt"></i>
                                        </a>
                                </div>

                                <div class="date">
                                    منذ
                                    <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?>
                                </div>

                                <div class="detailing">
                                    <a href="<?the_permalink()?>">
                                        <?the_title()?>
                                    </a>
                                </div>

                                <div class="descreption">
                                    <p>
                                        <?=wp_trim_words(get_the_content(), 25 ,'...' )?>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <?
	                $i = $i + 0.2;
	              endwhile;	
	             endif; 
	             ?>

                </div>
            </div>
        </div>

        <div class="pagination">
	        <?=YC_ArchivePagination();?>
	     </div>
	     
    </section>

<?php get_footer() ?>