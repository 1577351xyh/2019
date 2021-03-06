<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>
<div id="theme-page" class="page-master-holder">
  
	<div class="mk-main-wrapper-holder">
	<div class="theme-page-wrapper right-layout">
		<div class="theme-content">
			<?php 
			/* Run the blog loop shortcode to output the posts. */
			echo do_shortcode( '[mk_blog order="DESC" orderby="date" style="classic"]' ); ?>
		</div>

	<?php get_sidebar(); ?>	
	<div class="clearboth"></div>	
	</div>
	</div>
</div>
<?php get_footer(); ?>