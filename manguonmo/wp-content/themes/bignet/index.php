<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bignet
 */

get_header(); ?>
	<div id="content">
		<div class="row container-fluid">
			<div class="sidebar col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<?php get_sidebar(); ?>
				
			</div>
			<div class="row col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<?php get_template_part( 'content', 'left-sidebar' ); ?>
			</div>
			

<?php

get_footer();
