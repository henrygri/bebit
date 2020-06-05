<?php
/**
*
*
* Template Name: Coming soon
*
* @package  WordPress
* @subpackage  Timber
* @since   Timber 0.1
*/
$post = new Timber\Post();
$context = Timber::context();
$templates = array( '/templates/pages/coming-soon.twig' );

Timber::render( $templates, $context );

