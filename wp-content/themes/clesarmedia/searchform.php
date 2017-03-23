<form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>/">
	<div>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="<?php _e('Search...', 'clesarmedia') ?>"/>	
		<button type="submit">
			<i class="fa fa-search"></i>
		</button>
	</div>	
</form> 