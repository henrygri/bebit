<?php
/**
*
*
* Template Name: Home
*
* @package  WordPress
* @subpackage  Timber
* @since   Timber 0.1
*/

$post = new Timber\Post();
$context = Timber::context();
$templates = array( '/templates/pages/home.twig' );
$context['fields_page'] = $post;
$context['case'] = new Timber\PostQuery(get_field('case_header'));
$context['list_case'] = new Timber\PostQuery(get_field('lista_case'));
$context['sezione_press'] = get_field('sezione_press');
$context['list_servizi'] = new Timber\PostQuery(get_field('lista_servizi'));
$context['case_count'] = count(get_posts('post_type=case-history&posts_per_page=-1&suppress_filters=0'));
$context['language'] = ICL_LANGUAGE_CODE;
Timber::render( $templates, $context );
