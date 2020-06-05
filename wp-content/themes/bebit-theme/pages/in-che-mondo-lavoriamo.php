<?php
/**
*
*
* Template Name: In che mondo lavoriamo
*
* @package  WordPress
* @subpackage  Timber
* @since   Timber 0.1
*/

$post = new Timber\Post();
$context = Timber::context();
$context['fields'] = $post;
$templates = array( '/templates/pages/in-che-mondo-lavoriamo.twig' );

Timber::render( $templates, $context );
