<?php
/*Template Name: Linny's custom page*/


get_header(); ?>

<div id="main">
	
	<section id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			
			<?php the_content(); ?>
			
		</article>
	
		<?php endwhile; endif; ?>
		
	</section><!-- #content -->
		<div class="sidequote">
		<?php
				$meta_quote = get_post_meta( $post->ID, 'quotation', true );
				if ($meta_quote) {
					echo "<p><strong>".$meta_quote."</strong></p></p>";
				} else {
					echo "<p> No quote found.</p>";
				}

				?>
		</div>

<?php //get_sidequote(); ?>

</div><!-- #main -->

<?php get_footer(); ?>