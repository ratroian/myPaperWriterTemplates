<div class="last-added-item">
<svg width="179" height="184" viewBox="0 0 179 184" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_139_903" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="179" height="184">
<rect width="179" height="184" fill="#2F2F2F"/>
</mask>
<g mask="url(#mask0_139_903)">
<ellipse opacity="0.5" cx="107.761" cy="78.5" rx="107.113" ry="104.5" fill="#F4BABF"/>
<g opacity="0.3">
<path d="M95.8738 124.324L77.8125 110.639L109.54 70.6982L127.602 84.3837L95.8738 124.324Z" fill="#D98C93"/>
<path d="M121.522 80.6248L103.461 66.9393L135.189 26.9987L153.25 40.6842L121.522 80.6248Z" fill="#F4BABF"/>
<path d="M69.3254 130.316L72.0346 105.53L93.2266 121.565L69.3254 130.316Z" fill="#F6F6F6"/>
<path d="M69.3262 130.668C69.3262 130.668 69.6875 127.614 70.1089 123.62C70.1691 123.15 70.2293 122.621 70.2895 122.093C70.2895 122.21 77.7548 127.614 77.7548 127.555C78.6579 127.085 69.3262 130.668 69.3262 130.668Z" fill="#757072"/>
</g>
</g>
</svg>
  
<svg width="178" height="185" viewBox="0 0 178 185" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_139_882" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="178" height="185">
<rect width="178" height="185" fill="#2F2F2F"/>
</mask>
<g mask="url(#mask0_139_882)">
<ellipse opacity="0.5" cx="106.761" cy="78.5" rx="107.113" ry="104.5" fill="#F4BABF"/>
<g opacity="0.5">
<path d="M94.8738 124.324L76.8125 110.639L108.54 70.6982L126.602 84.3837L94.8738 124.324Z" fill="#F4ECA8"/>
<path d="M120.522 80.6248L102.461 66.9393L134.189 26.9987L152.25 40.6842L120.522 80.6248Z" fill="#FFFDF3"/>
<path d="M68.3254 130.316L71.0346 105.53L92.2266 121.565L68.3254 130.316V130.316Z" fill="white"/>
<path d="M68.3262 130.668C68.3262 130.668 68.6875 127.614 69.1089 123.62C69.1691 123.15 69.2293 122.621 69.2895 122.093C69.2895 122.21 76.7548 127.614 76.7548 127.555C77.6579 127.085 68.3262 130.668 68.3262 130.668V130.668Z" fill="#757072"/>
</g>
</g>
</svg> 
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
