<?php if( have_comments() ) { ?>

	<h3>
	<?php comments_number(
		__('No hay comentarios aun', 'jrg'),
		__('Hay un comentario publicado', 'jrg'),
		__('Hay % comentarios', 'jrg')
	); ?>
	</h3>

	<ol id="comments-list">
		<?php wp_list_comments(); ?>
	</ol>

<?php paginate_comments_links(); ?>
	
<?php } ?>

<?php comment_form();  ?>