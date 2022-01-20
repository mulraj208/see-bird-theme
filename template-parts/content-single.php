<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12 prose lg:prose-lg prose-a:text-primary md:px-3 xl:px-0 max-w-full' ); ?>>

  <header class="entry-header mb-4">
    <h1 class="text-4xl leading-tight font-extrabold text-black mb-1 lg:mb-1">
      <?php the_title(); ?>
    </h1>
    <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-400"><?php echo get_the_date(); ?></time>
  </header>

	<div>
		<?php the_content(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'see_bird' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'see_bird' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>
	</div>

</article>
