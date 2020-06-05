<?php
/**
*
*
* Template Name: Contatti
*
* @package  WordPress
* @subpackage  Timber
* @since   Timber 0.1
*/

$post = new Timber\Post();
$context = Timber::context();
$context['fields_page'] = $post;
$templates = array( '/templates/pages/contatti.twig' );


Timber::render( $templates, $context );
