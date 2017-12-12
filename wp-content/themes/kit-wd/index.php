<?php
	get_header();
	if(have_posts()) :
		while(have_posts()) : the_post();
	?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<a href="<?php the_permalink(); ?>">voir plus</a>
	
	<?php
		endwhile; 
	else : 
		echo '<p>Not found content</p>';
	endif;

	get_footer();
?>