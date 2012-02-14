<?php get_header();?>
	<div id="main">
		<div id="primary" role="main" class="seven col">
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
		</div>
		<?php get_sidebar();?>
	</div>
	<?php get_footer();?>
