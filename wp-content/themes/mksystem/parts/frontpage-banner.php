
    <?php if (simple_business_wp_get_option('fp-banner-toggle') == "1") { ?>
        <div>
            <img id="frontpage_banner" class="static_banner nimbus_1168_526" src="<?php echo esc_url(simple_business_wp_get_option('simple_business_wp_content_width_banner')); ?>" />
        </div>
    <?php } else if (simple_business_wp_get_option('fp-banner-toggle') == "3") { ?>
            <h2 style="text-align:center;font-weight:bold;"><?php _e("Please update to the <a style='font-weight:bold;color:blue;' href='http://www.nimbusthemes.com/wordpress-themes/simple-business/'>Pro version</a> of this theme in order to use this slideshow feature.", "simple-business-wp"); ?></h2>
    <?php } else { ?>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/preview/simplebiz.jpg" class="nimbus_1168_526 static_banner" alt="Example Banner" />
        </div>
    <?php } ?>

    <div>  Gerberth</div>

<hr>
<div data-interval="5000" data-ride="carousel" class="carousel slide" id="slideshow">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#slideshow" data-slide-to="0" class="active"></li>
        <li data-target="#slideshow" data-slide-to="1"></li>
        <li data-target="#slideshow" data-slide-to="2"></li>
        <li data-target="#slideshow" data-slide-to="3"></li>
        <li data-target="#slideshow" data-slide-to="4"></li>
        <li data-target="#slideshow" data-slide-to="5"></li>    
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img alt="Slideshow Banner 0" src="http://demo.nimbusthemes.com/simple-business/files/2015/12/simplebizslider2a2b.jpg">
        </div>
        <div class="item">
            <img alt="Slideshow Banner 1" src="http://demo.nimbusthemes.com/simple-business/files/2015/12/simplebizslider21.jpg">
        </div>
        <div class="item">
            <img alt="Slideshow Banner 2" src="http://demo.nimbusthemes.com/simple-business/files/2015/12/simplebizslider21.jpg">
        </div>
        <div class="item">
            <img alt="Slideshow Banner 3" src="http://demo.nimbusthemes.com/simple-business/files/2015/12/simplebizslider21.jpg">
        </div>
        <div class="item">
            <img alt="Slideshow Banner 4" src="http://demo.nimbusthemes.com/simple-business/files/2015/12/simplebizslider21.jpg">
        </div>
        <div class="item">
            <img alt="Slideshow Banner 5" src="http://demo.nimbusthemes.com/simple-business/files/2015/12/simplebizslider21.jpg">
        </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#slideshow" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#slideshow" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<hr>
<!-- <div data-pause="pause" data-interval="5000" data-ride="carousel" class="carousel slide" id="slideshowx">
 
    <ol class="carousel-indicators">
        <li class="" data-slide-to="0" data-target="#slideshow"></li>
        <li data-slide-to="1" data-target="#slideshow" class="active"></li>
    </ol>
     
    <div class="carousel-inner">
        <div class="item">
        <img alt="Slideshow Banner 0" src="http://demo.nimbusthemes.com/simple-business/files/2015/12/simplebizslider2a2b.jpg"> </div>
        <div class="item active">
        <img alt="Slideshow Banner 1" src="http://demo.nimbusthemes.com/simple-business/files/2015/12/simplebizslider21.jpg"> </div>
    </div>
     
    <a data-slide="prev" href="#slideshow" class="left carousel-control">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a data-slide="next" href="#slideshow" class="right carousel-control">
     <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div> -->
