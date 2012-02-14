<?php get_header();?>
	<div id="main">
		<div>
			
		</div>
		<div id="primary" role="main" class="seven col">
		<section class="seven col">
		 <?php
		 	$page_id=13;
		 	$involve=get_page( $page_id );
		 	$involve_title=$involve->post_title;
		 	$involve_content=$involve->post_excerpt;
		 	?>
               		<h2><?php echo $involve_title;?></h2>
               		<div class="three col alpha">
               			<?php echo get_the_post_thumbnail($involve->ID, 'frontThumb'); ?>
               		</div>
               		<div class="four col omega">
               			<?php echo $involve_content;?>
               			<a href="<?php echo get_permalink($page_id);?>">Get Involved</a>
               		</div>
    	 </section>
    	 <section class="seven col">
    	 <h2>Stories of Recovery</h2>
    	 <?php 
			 	     
			 	     query_posts('cat=4&posts_per_page=2');
			 	     if(have_posts()) :?>
        <?php while(have_posts()): the_post(); ?>
    	 	<article role="article">
    	 		<h3 class="visuallyhidden"><?php the_title();?></h3>
				
					<?php 
//This must be in one loop

if(has_post_thumbnail()) {?>

	<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_post_thumbnail('loopThumb'); ?></a>

<?php } else {
	echo '';
}
?>
			
				<p><?php the_excerpt(); ?></p>
				
			</article>
			<?php endwhile;?>
        <?php else:?>
        <?php endif; wp_reset_query();?>
    	 </section>
		</div>
		<?php get_sidebar();?>
	</div>
	<?php get_footer();?>
