<?php get_header(); ?>

<section class="request">

	<div class="request-container">


        <div class="request-title">
            <h4 class="wow fadeInRight"><?the_title()?></h4>
            <h2 class="wow fadeInLeft"><?=get_post_meta($post->ID,'pageHeadTitle',1);?></h2>
        </div>

        <div class="request-form">
          <? if( isset($_POST['username']) ) { ?>
              <?php
                // the message

                $msg   = '';
                $msg  .= 'email   : ' . $_POST['useremail'] . ' <br> ';
                $msg  .= 'phone   : ' . $_POST['userphone'] . ' <br> ';
                $msg  .= 'usersub : ' . $_POST['usersub']   . ' <br> ';
                $msg  .= 'service : ' . $_POST['userser']   . ' <br> ';
                $msg  .= $_POST['msg'];

                // send email
                mail(get_option('admin_email'),"رسالة من".$_POST['username'],$msg);
                ?>
                <div class="alert alert-success">لقد تم إرسال رسالتك بنجاح وسوف يتم الرد عليك بعد 24 ساعة  <i class="fas fa-check"></i></div>
            <? } ?>
            <form action="" method="post" class="wpcf7-form" novalidate="novalidate">
                <input class="wow fadeInRight" type="text" name="username"  placeholder="الاسم">
                <input class="wow fadeInLeft" type="email" name="useremail"  placeholder="البريد الالكتروني">
                <input class="wow fadeInRight" type="phone" name="userphone"  placeholder="رقم الهاتف">
                <input class="wow fadeInLeft" type="text" name="usersub"  placeholder="الموضوع">
                <input class="wow fadeInRight" type="text" name="userser"  placeholder="الخدمه">
                <textarea class="wow fadeInLeft" name="msg" placeholder="رسالتك"></textarea>
                <input class="btns wow fadeInUpBig" type="submit" value="ارسال">
            </form>
            

        </div>
       

    </div>


    
	
</section>

<?php get_footer(); ?>