<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Charitize
 */

get_header(); ?>
<div class="banner">
	<?php the_post_thumbnail(); ?>
</div>
<div id="content">
	<h1 class="entry-title">

		<svg xmlns="http://www.w3.org/2000/svg" width="400" height="">
  <text x="30" y="75"><?php the_title( '', '' ); ?></text>
</svg>
</h1>
<section class="wrapper wrap-content">
	<div class= "site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar();
		?>
	</div>
</section>
</div>
<?php
get_footer();
