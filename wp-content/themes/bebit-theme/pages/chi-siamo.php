<?php
/**
*
*
* Template Name: Chi siamo
*
* @package  WordPress
* @subpackage  Timber
* @since   Timber 0.1
*/

$post = new Timber\Post();
$context = Timber::context();
$context['fields_page'] = $post;
$context['sezione_gridthree'] = get_field('sezione_gridthree');
$context['sezione_loghi'] = get_field('sezione_loghi');
$context['sezione_audio'] = get_field('sezione_audio');
$templates = array( '/templates/pages/chi-siamo.twig' );
Timber::render( $templates, $context );
