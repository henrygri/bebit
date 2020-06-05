<?php
/**
*
*
* Template Name: Cosa facciamo
*
* @package  WordPress
* @subpackage  Timber
* @since   Timber 0.1
*/

$post = new Timber\Post();
$context = Timber::context();
$context['fields_page'] = $post;
$templates = array( '/templates/pages/cosa-facciamo.twig' );


Timber::render( $templates, $context );
