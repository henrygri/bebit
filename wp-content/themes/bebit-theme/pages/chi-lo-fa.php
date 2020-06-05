<?php
/**
*
*
* Template Name: Chi lo fa
*
* @package  WordPress
* @subpackage  Timber
* @since   Timber 0.1
*/

$post = new Timber\Post();
$context = Timber::context();
$context['fields_page'] = $post;
$templates = array( '/templates/pages/chi-lo-fa.twig' );


Timber::render( $templates, $context );
