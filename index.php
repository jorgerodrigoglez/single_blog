<?php get_header(); ?>

	<section id="main-content">

	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?> 
	
		<article class="post resume">
			<header class="post-title">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<small class="meta"><?php the_time( get_option('date_format') ); ?> &bull; <?php the_category(', ' ); ?></small>
			</header>

			<div class="post-content">
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="readmore"><?php _e( 'Seguir Leyendo &rarr;', 'jrg'); ?></a>
			</div>

		</article>
		
	<?php endwhile; else : ?>

		<article class="post resume">
			<header class="post-title">
				<h3><?php _e( 'No hay contenidos disponibles', 'jrg'); ?></h3>				
			</header>

			<div class="post-content">
				<p><?php _e( 'no hay contenidos correspondientes con esta página, realiza una busqueda para encontrar lo que deseas', 'jrg'); ?></p>
				<?php get_search_form(); ?>
			</div>

		</article>


	<?php endif; ?>

	<?php if ( get_next_post_link() || get_previous_post_link()  ) { ?>

			<div class="post-nav cf">
				<?php next_posts_link( __('&larr; Previos', 'jrg') ); ?>
				<?php previous_posts_link( __('Recientes &rarr;', 'jrg') ); ?>			
			</div>

	<?php } ?>

	</section>
	
	




<?php get_sidebar(); ?>





<?php get_footer(); ?>