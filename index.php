<?php

get_header();

if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

        // Get the content display template
        get_template_part( 'template-parts/content/content');
    }

} else {

    // if no posts exist for page , show empty template
    get_template_part( 'template-parts/content/content','empty'); 


} get_footer(); 
?>