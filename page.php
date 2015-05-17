<?php get_header(); ?>

<section id="main-content">

 	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?> 
	
		<article class="post">
			<header class="post-title">

				<h3><?php the_title(); ?></a></h3>
				
			</header>

			<div class="post-content">

				<?php the_content(); ?>

			</div>

		</article>
		
	<?php endwhile; endif; ?>

</section>


<?php get_sidebar(); ?>


<?php get_footer(); ?>