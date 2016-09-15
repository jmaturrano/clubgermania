<div class="row row_mk content_squeezex">
      <div class="col-md-4">
        <?php
        get_template_part( 'parts/header', 'logo'); 
        ?>
    </div>
   
    <div class="col-md-8">
        <?php if (simple_business_wp_get_option('social-toggle') == "1") { ?>
        <p id="social_buttons" class="text-right s1">
            <?php
            $social_type = array("fa-facebook" => "simple_business_wp_facebook_url", "fa-linkedin" => "simple_business_wp_linkedin_url", "fa-twitter" => "simple_business_wp_twitter_url", "fa-envelope" => "simple_business_wp_mail_url");
            foreach ($social_type as $key => $id) {
                $$id = trim(simple_business_wp_get_option($id));
                $mailto = ($key == 'fa-envelope') ? 'mailto:' : '';
                if ($key == 'fa-envelope'){
                    $id = sanitize_email($$id);
                } else {
                    $id = esc_url($$id);
                }
                if (!empty($id)) {
                ?>
                    <a href="<?php echo $mailto; ?><?php echo $id; ?>"><i class="fa <?php echo $key; ?> fa-socialcircle"></i></a>
                <?php
                }
            }
            if (simple_business_wp_get_option('simple_business_wp_hide_rss_icon') == 0) {
            ?>
                <a href="<?php echo get_bloginfo('rss2_url'); ?>"><i class="fa fa-rss fa-socialcircle"></i></a>
            <?php
            }
            ?>
        </p>
        <?php } else if (simple_business_wp_get_option('social-toggle') == "3") { ?>

        <?php } else { ?>
        <div class="s1_1">
            <p class="text-right s1">
                &nbsp;
            </p>
        </div>
        <div class="s1_2">
            <p  class="text-right s2 icono">
                <img src="<?php echo get_template_directory_child(); ?>/inc/img/bandera.jpg" />
                <a target="_blank"href="http://facebook.com"><i class="icono glyphicon glyphicon-earphone"></i></a>
                <a target="_blank"href="#"><i class="icono fa fa-facebook oficial"></i></a>
                <a href="mailto:#"><i class="icono fa fa-envelope fa-social"></i></a>
            </p>
        </div>
        <div class="s1_3">
            <p  class="text-right s3">
                &nbsp;
            </p>
        </div>
            <?php 
            get_template_part( 'parts/header', 'menu');
            ?>          
        <?php } ?>
    </div>

  
   
</div>

