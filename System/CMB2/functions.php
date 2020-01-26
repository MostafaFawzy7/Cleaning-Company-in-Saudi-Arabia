<?php
function disqus_embed($disqus_shortname) {
global $post;
wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
echo '<div id=”disqus_thread”></div>
<script type=”text/javascript”>
var disqus_shortname = '.$disqus_shortname.';
var disqus_title = '.$post->post_title.';
var disqus_url = '.get_permalink($post->ID).';
var disqus_identifier = '.$disqus_shortname.'-'.$post->ID.';
</script>';
}
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {

	require_once  __DIR__ . '/cmb2/init.php';

} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {

	require_once  __DIR__ . '/CMB2/init.php';

}



function cmb2_hide_if_no_cats( $field ) {

	// Don't show this field if not in the cats category

	if ( ! has_tag( 'cats', $field->object_id ) ) {

		return false;

	}

	return true;

}


add_filter( 'cmb2_meta_boxes', 'cmb2_sample_metaboxes' );

function cmb2_sample_metaboxes( array $meta_boxes ) {

	$prefix = '';

    	//////////////////////////////////////
    
    	// show online
    
    	//////////////////////////////////////
        

        $meta_boxes['postOptions'] = array(
        
        'id'            => 'postOptions',
        
        'title'         => __( 'روابط المقالة ', 'cmb' ),
        
        'object_types'  => array( 'post','page' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, 

        'fields'         => array(

            array(

                'name' => 'خلفية المقال',
                'id'   => 'coverTop',
                'type' => 'file',

            ),
            
               array(

                'name' => 'مثبت',
                'id'   => 'pin',
                'type' => 'checkbox',

            ),
            array(

                'name' => 'التليفون',
                'id'   => 'telephone',
                'type' => 'text',

            ),
            
        ),

        );



        $meta_boxes['services_post'] = array(
        
        'id'            => 'services_post',
        
        'title'         => __( 'روابط المقالة ', 'cmb' ),
        
        'object_types'  => array( 'services' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'         => array(

            array(

                'name' => 'الأيقونة',
                'id'   => 'icon',
                'type' => 'textarea_code',

            ),
            array(

                'name' => 'الزر',
                'id'   => 'button',
                'type' => 'text',

            ),
            array(

                'name' => 'رابط الزر',
                'id'   => 'buttonLink',
                'type' => 'text',

            ),
            array(

                'name' => 'ضع الصورة',
                'id'   => 'serviceImage',
                'type' => 'file',

            ),


        ),

        );



        $meta_boxes['about_post'] = array(
        
        'id'            => 'about_post',
        
        'title'         => __( 'عن شركتنا', 'cmb' ),
        
        'object_types'  => array( 'about' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'         => array(

            array(

                'name' => 'ارفع الصورة ',
                'id'   => 'imgRight',
                'type' => 'file',

            ),
            array(

                'name' => 'عنوان عن الشركة',
                'id'   => 'headLine',
                'type' => 'text',

            ),

        ),

        );

        

        $meta_boxes['page_post'] = array(
        
        'id'            => 'page_post',
        
        'title'         => __( 'مقالات الصفحات', 'cmb' ),
        
        'object_types'  => array( 'page' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'         => array(

            array(

                'name' => 'صورة عن  الشركة',
                'id'   => 'abouTimg',
                'type' => 'file',

            ),

            array(

                'name' => 'عنوان فرعي',
                'id'   => 'company',
                'type' => 'text',

            ),
            array(

                'name' => ' رابط العنوان فرعي',
                'id'   => 'company1',
                'type' => 'text',

            ),
            array(

                'name' => 'عنوان  على صورة الصفحة',
                'id'   => 'title',
                'type' => 'text',

            ),

            array(

                'name' => 'عنوان للصفحة',
                'id'   => 'pageHeadTitle',
                'type' => 'text',

            ),
        ),

        );

        

        $meta_boxes['offer_post'] = array(
        
        'id'            => 'offer_post',
        
        'title'         => __( 'عروضنا', 'cmb' ),
        
        'object_types'  => array( 'offers' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'         => array(

            array(

                'name' => 'التاريخ',
                'id'   => 'dating',
                'type' => 'text',

            ),
            array(

                'name' => 'صورة العرض',
                'id'   => 'offerImg',
                'type' => 'file',

            ),
            array(

                'name' => 'صورة الخلفية في الأعلى',
                'id'   => 'topCoverOffer',
                'type' => 'file',

            ),

        ),

        );         

        
        
	return $meta_boxes;

}

