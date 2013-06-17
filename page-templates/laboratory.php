<?php
/**
 * Template Name: laboratory
 *
 * Description: A blank page which I'll put data into.
 *
 */

get_header('page'); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container_class' => 'pagemenu') ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'content', 'page' ); ?>
				<?php the_content(); ?>
				<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>