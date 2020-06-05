<?php
/**
 * The Template for displaying single press
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context         = Timber::context();
$timber_post     = Timber::query_post();
$context['fields_press'] = $timber_post;
$context['other_press'] = get_field('press_correlate');
Timber::render( 'pages/single-press.twig', $context );
