<?php
/**
*
*
* Template Name: Privacy
*
* @package  WordPress
* @subpackage  Timber
* @since   Timber 0.1
*/

$post = new Timber\Post();
$context = Timber::context();
$context['post'] = $post;
$templates = array( '/templates/pages/privacy.twig' );

Timber::render( $templates, $context );
