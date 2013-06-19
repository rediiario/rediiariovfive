<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
		<div class="post-item_inr">
			<?php if( is_user_logged_in() ) : ?>
				<a href="<?php the_permalink(); ?>" class="link_area <?php if(has_post_thumbnail()) echo 'wthumb'; ?>">
			<?php else : ?>
				<div class="link_area <?php if(has_post_thumbnail()) echo 'wthumb'; ?>">
			<?php endif; ?>
			
				<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
				<div class="featured-post">
					<?php _e( 'Featured post', 'twentytwelve' ); ?>
				</div>
				<?php endif; ?>

				<?php the_post_thumbnail(); ?>

				<?php /*if ( is_search() ) : // Only display Excerpts for Search ?>
				<div class="entry-summary">
					<?php the_excerpt();
				</div>
				//else :*/ ?>

				<?php get_the_title(); ?>
				<?php if( $post->post_status == 'private') : ?>
					<span class="private">Private Post </span>
				<?php endif; ?>

				<div class="entry-content">
					<div class="entry-header">
						<h1 class="entry-title"><?php echo $post->post_title; ?></h1>
					</div><!-- .entry-header -->

					<?php //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
					<?php if( is_user_logged_in() ) the_excerpt(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>

				</div><!-- .entry-content -->
				<?php //endif; ?>
			
			<?php
				if( is_user_logged_in() ) {
					echo '</a>';
				} else {
					echo '</div>';
				}
			?>

			<p class="entry-meta">
				<?php twentytwelve_entry_meta(); ?>
				<?php if ( comments_open() ) : ?>
					<em class="comments-link">
						<?php comments_popup_link( '<span class="leave-reply">' . __( ' (0)', 'twentytwelve' ) . '</span>', __( ' (1)', 'twentytwelve' ), __( ' (%)', 'twentytwelve' ) ); ?>
					</em><!-- .comments-link -->
				<?php endif; // comments_open() ?>
			</p><!-- .entry-meta -->
		</div>
	</article><!-- #post -->
