
<div <?php post_class('row'); ?>>
    <div class="content-page content-page-contacto mksystem-content-bg">
        <div class="content-page-marco">

                <div class="col-md-12">

                    <?php if (simple_business_wp_get_option('fp-contact-title') != '') { ?>
                        <div class="contact-title h1"><?php echo esc_html(simple_business_wp_get_option('fp-contact-title')); ?></div>
                    <?php } ?>
                    <?php if (simple_business_wp_get_option('fp-contact-sub-title') != '') { ?>
                        <div class="contact-sub-title h4"><?php echo esc_html(simple_business_wp_get_option('fp-contact-sub-title')); ?></div>
                    <?php } ?>
                    <?php 
                    if(isset($_POST['submitted'])) {
                        $simple_business_wp_contact_recipient_email = simple_business_wp_get_option('contact-mailto');
                        $simple_business_wp_contact_sender_email = simple_business_wp_get_option('contact-mailfrom');
                        if($simple_business_wp_contact_recipient_email != '' && $simple_business_wp_contact_sender_email != '') {
                            extract($_POST);
                            $blog_name = get_bloginfo('name');
                            $message = "Nombre: $myname
                                        Email: $email
                                        Website: $website
                                        Comentarios: $comments
                            ";
                            $headers = 'From: '.$blog_name.' <'.$simple_business_wp_contact_sender_email.'>' . "\r\n";
                            wp_mail($simple_business_wp_contact_recipient_email, 'Contact Form', $message, $headers);
                        }
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <!--<div class="contact-title h1">Contáctenos</div>-->
                            <div class="block-title-page text-center">
                                <div class="border-title-page"></div>
                                <h3><?php get_template_part( 'parts/title', 'page'); ?></h3>
                                <h5 style="text-transform: none;"><?= get_theme_mod('social_mail'); ?></h5>
                                <h5>&nbsp;</h5>
                            </div>
                            <div class="clear"><br></div>
                            <?php
                                if(isset($_POST['submitted'])) { 
                                    if(isset($_POST['myname']) && isset($_POST['email'])) {
                                        if((trim($_POST['myname']) != "" ) && (trim($_POST['email']) != "" )) { ?>
                                            <p class="bg-success"><?php echo _e('Gracias por escribirnos!', 'simple-business-wp'); ?></p>
                                        <?php } else { ?>
                                            <p class="bg-danger"><?php echo _e('Por favor ingrese su nombre y su email.', 'simple-business-wp'); ?></p>
                                        <?php 
                                        }
                                    }
                                }
                            ?>
                             <form class="contact-form" name="contact-form" method="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group"><input data-sr="wait 0.3s, enter left and move 50px after 1s" type="text" id="myname" name="myname" placeholder="Nombre*" class="form-control input-lg" /></div>
                                        <div class="form-group"><input data-sr="wait 0.3s, enter left and move 50px after 1s" type="text" id="email" name="email" placeholder="Email*" class="form-control input-lg" /></div>
                                        <div class="form-group"><input data-sr="wait 0.3s, enter left and move 50px after 1s" type="text" id="website" name="website" placeholder="Website" class="form-control input-lg" /></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea data-sr="wait 0.3s, enter right and move 50px after 1s" id="comments" name="comments" class="form-control input-lg" rows="6" cols="" placeholder="Comentarios"></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="text-center">
                                    <input type="hidden" name="scrolltoform" value="<?php if (simple_business_wp_get_option('fp-contact-slug')=='') {echo "contact";} else {echo esc_attr(simple_business_wp_get_option('fp-contact-slug'));} ?>">
                                    <input type="hidden" name="submitted" id="submitted" value="true" />
                                    <input data-sr="wait 0.3s, enter right and move 50px after 1s" type="submit" name="submit_button" id="submit_button" value="Enviar" class="contact-submit btn btn-theme" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 

            <div class="clearfix"></div><!--.clearfix-->
        </div><!--.content-page-marco-->
    </div><!--.content-page-->
</div><!--.row-->


