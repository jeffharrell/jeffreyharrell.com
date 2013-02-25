<?php
/**
 * Template Name: Front Page Template
 */

get_header('front');

get_sidebar('front');

while (have_posts()) {
	the_post();
	get_template_part('content', 'front');
}

get_footer();