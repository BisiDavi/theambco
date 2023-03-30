<?php

/**
 * @package Wordpress
 * @subpackage Contact us view
 * @since 1.0
 */

?>

<? 
    $service_menu = wp_get_nav_menu_items(11);  
    $company_menu = wp_get_nav_menu_items(2); 
    $contact_post = get_post_field('post_content',91);
    $facebook_link = get_post_field('facebook',305);
    $youtube_link = get_post_field('youtube',305);
    $twitter_link = get_post_field('twitter',305);
    $instagram = get_post_field('instagram',305);
?>

            <footer class="footer py-5 text-white pr-md-5">
                <div class="container d-flex flex-column flex-md-row  justify-content-between">
                    <div class="logo col-12 col-md-4  mb-4 mb-lg-0">
                        <img src="<? echo get_template_directory_uri(); ?>/assets/images/logo_white.webp" alt="logo" height="60px" width="200px" />
                        <h6 class="my-lg-4 my-2">Swift access to high quality medical care </h6>
                        <div class="footer-social-links">
                            <a  target="_blank" href="<? echo $instagram;?>">
                                <img src="<? echo get_template_directory_uri(); ?>/assets/images/instagram.svg" width="20px" height="20px"  class="mx-2" alt="ambulance" />
                            </a>
                            <a href="<? echo $twitter_link;?>" target="_blank">
                                <img src="<? echo get_template_directory_uri(); ?>/assets/images/twitter.svg" width="20px" height="20px"  class="mx-2" alt="ambulance" />
                            </a>
                            <a href="<? echo $facebook_link;?>" target="_blank">
                                <img src="<? echo get_template_directory_uri(); ?>/assets/images/facebook.svg" width="20px" height="20px"  class="mx-2" alt="ambulance" />
                            </a>
                            <a href="<? echo $youtube_link;?>" target="_blank">
                                <img src="<? echo get_template_directory_uri(); ?>/assets/images/youtube.svg" width="20px" height="20px"  class="mx-2" alt="ambulance" />
                            </a>
                        </div>
                    </div>
                    <div class="service_company justify-content-lg-between col-12 col-md-4 d-flex flex-md-column flex-lg-row">
                        <div class="services ">
                            <h4>OUR SERVICES</h4>
                            <ul>
                                <? foreach ($service_menu as $item ) { ?>
                                    <li> 
                                        <a href="<? echo $item->url; ?>">
                                            <? echo $item->post_title; ?> 
                                        </a>
                                    </li>
                                <?  } ?>
                            </ul>
                        </div>
                        <div class="company mx-5 mx-md-0">
                            <h4>COMPANY</h4>
                            <ul>
                                <? foreach ($company_menu as $item ) { ?>
                                    <li> 
                                        <a href="<? echo $item->url; ?>">
                                            <? echo $item->title; ?> 
                                        </a>
                                    </li>
                                <?  } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="contact  col-md-4 px-md-0 col-12 ml-lg-5">
                        <h4>CONTACT</h4>
                        <? echo $contact_post; ?>
                    </div>
                </div>
            </footer>
            <?php wp_footer(); ?>
        </div>
    </body>

</html>