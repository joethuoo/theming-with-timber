<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$context = Timber::get_context();
$menu_id = get_term_by('slug','menu','nav_menu')->term_id;
//$menu    = new TimberMenu(3);
$context['menu'] = new TimberMenu($menu_id);

$product = array('category_name' => 'Products');
$context['products'] = Timber::get_posts($product);

$query   = array(
	//'numberposts' => 3,
	'category_name' => 'News',
);
$context['news'] = Timber::get_posts($query);

$templates = array('index.twig');

$post = new TimberPost(10);
$context['post'] = $post;

/*if (is_front_page()) {
	array_unshift($templates, 'home.twig');
}*/
Timber::render(array('page-' . $post->post_name . '.twig', 'home.twig' ),$context);


