<?php
/**
 * The Template for displaying all single cases
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context         = Timber::context();
$timber_post     = Timber::query_post();




$context['case'] = $timber_post;
$context['related_case'] = get_field('case_correlate');

if ( post_password_required( $post->ID ) ) :
    Timber::render( 'single-password.twig', $context );
else :
	Timber::render( 'pages/single-case-history.twig', $context );
endif;
