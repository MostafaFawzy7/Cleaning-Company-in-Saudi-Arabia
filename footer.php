<?php wp_footer(); ?>
    <footer>
        <div class="footer">
            <div class="footer-container">
                <div class="main-footer">
                      

                          <div class="wedgit">
                        <div class="widget-as-link ">
                          <div class="link-title">
                              <h3 class="widget-title wow fadeInRight"><?=YC_GetOpt('float')?></h3>
                            
                            
                            <div class="menu-footermenu-container wow fadeInUpBig">
                                <?php
                                  wp_nav_menu ( array(  
                                  'theme_location'  => 'footer-menu',
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
                    </div>

                          </div>

                          <div class="women">
                            <img src="<?=ThemeDirURI?>/Inc/img/janitorial-services (1).png">
                          </div>
                          

                    
                </div>
                <div class="bottom-footer">
                    <div class="bottom-footer-container">
                       <div class="wedgit logoinfo">
                        <div class="footer-logo">
                            <a href="<?=home_url()?>">
                                <img src="<?=YC_GetOpt('loGo2')?>" alt="moversco" height="54">                            
                            </a>
                        </div>
                        <ul class="contactul">
                            <li class="f-add"><i class="fas fa-map-marker-alt"></i> <?=YC_GetOpt('location')?></li>
                            <li class="f-add mobile"><i class="fas fa-phone"></i> <?=YC_GetOpt('mobile')?></li>
                        </ul>
                         <div class="f-socialicon">
                                  <ul class="social-icons">
                                     <li><a href="<?php echo get_option('facebook'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                     <li><a href="<?php echo get_option('twitter'); ?>"><i class="fab fa-twitter"></i></i></a></li>
                                     <li><a href="<?php echo get_option('youtube'); ?>"><i class="fab fa-youtube"></i></i></a></li>
                                     <li><a href="<?php echo get_option('linked-in'); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                  </ul>
                              </div>
                    </div>
                        <div class="copywrite">
                            <div class="powerCont">
                                تصميم وبرمجة ورشة لونك  | <a href="http://www.yourcolor.net">YourColor.Net</a>
                            </div>
                            <div class="copyCont">
                                <a href="https://www.haeaty.com/" rel="nofollow">Seo by eng.ahmedadham</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a id="totop" href="" class="top-visible"><i class="fas fa-angle-up"></i></a>
    </body>

</html>