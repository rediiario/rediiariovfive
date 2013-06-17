<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .container -->
	<div class="account">
		<ul>
		<?php if(is_user_logged_in()) {
		echo '<li><a href="./wp-admin/post-new.php">Post</a></li>';
		} ?>
		<li><?php wp_loginout(); ?></li>
		<?php wp_register(); ?>
		</ul>
	</div>
	<footer>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>