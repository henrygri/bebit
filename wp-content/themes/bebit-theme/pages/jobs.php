<?php
/**
*
*
* Template Name: Jobs
*
* @package  WordPress
* @subpackage  Timber
* @since   Timber 0.1
*/

$post = new Timber\Post();
$context = Timber::context();
$context['jobs'] = $post;
$templates = array( '/templates/pages/jobs.twig' );

Timber::render( $templates, $context );
