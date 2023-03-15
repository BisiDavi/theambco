<?php

/**
 * @package Wordpress
 * @subpackage Contact us view
 * @since 1.0
 */

?>

<!-- 91 -->

<?php $service_menu = wp_get_nav_menu_items(11); ?> 
<?php $company_menu = wp_get_nav_menu_items(2); ?> 
<? $contact_post = get_post_field('post_content',91);?>

            <footer class="footer py-5 text-white">
                <div class="container d-flex flex-column flex-lg-row justify-content-between">
                    <div class="logo col-lg-3 col-12">
                        <img src="<? echo get_template_directory_uri(); ?>/assets/images/logo_white.webp" alt="logo" height="60px" width="200px" />
                        <h6 class="my-4">Swift access to high quality medical care </h6>
                    </div>
                    <div class="services col-lg-3 col-12">
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
                    <div class="company col-lg-2 col-12">
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
                    <div class="contact col-lg-4 col-12">
                        <h4>CONTACT</h4>
                        <? echo $contact_post; ?>
                    </div>
                </div>
            </footer>
            <?php wp_footer(); ?>
        </div>
    </body>

</html>