
<div <?php post_class('row'); ?>>
    <div class="content-page content-page-ubicanos mksystem-content-bg">
        <div class="content-page-marco">

                <div class="col-md-12">
                    <div class="contact-title h1"><?= get_the_title(); ?></div>
                    <br><br>

                    <?php $direccion = 'CALLE TUTUMO 151 URB. CHAMA LIMA - LIMA - SANTIAGO DE SURCO'; ?>
                    <?php $zoom_level = 12; ?>
                    <iframe width="100%" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=<?= str_replace(' ', '+', $direccion); ?>&amp;z=<?= $zoom_level; ?>&amp;output=embed"></iframe>
                </div> 

            <div class="clearfix"></div><!--.clearfix-->
        </div><!--.content-page-marco-->
    </div><!--.content-page-->
</div><!--.row-->


