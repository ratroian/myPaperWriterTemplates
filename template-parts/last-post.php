<div class="last-added-item card">

	<?php
		if ( is_singular() ) :
			the_title( '<a class="h5">', '</a>' );
		else :
			echo '<a class="card-link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>';
			the_title( '<div class="card-title h5">', '</div>' );
		endif;
 		?>

	<p>
		<?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
	</p>
</div>