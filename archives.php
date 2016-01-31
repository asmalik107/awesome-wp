<?php
/**
 * Template Name: Archives Template
 * The template for displaying all archives.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Awesim
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <div class="article-single">
            <h2>Archives</h2>
            <?php awesim_get_archives() ?>
        </div>

        <div class="article-single">
            <h2>Categories</h2>
            <div class="categories">
                <?php wp_list_categories('orderby=name&show_count=1&title_li=&hierarchical=0'); ?>
            </categories>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
