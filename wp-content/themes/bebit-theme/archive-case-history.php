<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.2
 */

$context = Timber::get_context();
$args = array('post_type' => 'case-history','posts_per_page' => -1,'suppress_filters' => 0,'orderby' => array('date' => 'DESC'),'has_password'=>false);
$object = get_queried_object();
$context['cases'] = Timber::get_posts( $args );

if(ICL_LANGUAGE_CODE == 'it') {
	$context['title_case'] = get_field('titolo_archivio_case', $object->name);
	$context['text_case'] = get_field('testo_archivio_case', $object->name);
	$context['sectors_list'] = get_field('lista_settori', $object->name);
	$context['sectors_list2'] = get_field('lista_settori_two', $object->name);
} else {
	$context['title_case'] = get_field('titolo_archivio_case_en', $object->name);
	$context['text_case'] = get_field('testo_archivio_case_en', $object->name);
	$context['sectors_list'] = get_field('lista_settori_en', $object->name);
	$context['sectors_list2'] = get_field('lista_settori_two_en', $object->name);
}


$templates = array( '/templates/pages/case-history.twig' );
Timber::render( $templates, $context );
