

<?php if ( 'post' == get_post_type() ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
    <div class="entry-header">
        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

    </div><!-- .entry-header -->

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
</article><!-- #post-## -->
<div class="clearfix"></div><!--.clearfix-->

<?php endif; ?>


