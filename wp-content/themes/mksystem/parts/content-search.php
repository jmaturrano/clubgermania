

<?php if ( 'page' == $post->post_type ) : ?>
	<article id="post-<?= $post->ID; ?>" <?php post_class('col-md-12'); ?>>
	    <div class="entry-header">
			<h1 class="entry-title"><a href="<?= $post->guid; ?>" rel="bookmark"><?= $post->post_title; ?></a></h1>
	    </div><!-- .entry-header -->

	    <div class="entry-summary">
	        <?= substr($post->post_content, 0, 200); ?>
	    </div><!-- .entry-summary -->
	</article><!-- #post-## -->
	<div class="clearfix"></div><!--.clearfix-->

<?php endif; ?>

