<?php get_header(); ?>

<section id="main-content">

 	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?> 
	
		<article class="post resume">
			<header class="post-title">
				<h3><?php the_title(); ?></a></h3>
				<small class="meta"><?php the_time( get_option('date_format') ); ?> &bull; <?php the_category(', ' ); ?></small>
			</header>

			<div class="post-content">

				<?php the_content(); ?>

			</div>

		</article>
		
	<?php endwhile; endif; ?>

	<div class="comments-area">

		<?php comments_template(); ?>

	</div>


</section>

<?php get_sidebar(); ?>


<?php get_footer(); ?>