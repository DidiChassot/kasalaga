<?php
/**
 * The template for displaying home page.
 * @package business-craft
 */
global $charitize_customizer_all_values;

get_header();
?>
<img src="<?php echo get_bloginfo('template_url') ?>/img/home_banner.jpg"/>

				<?php
				while ( have_posts() ) : the_post();

					the_content(); 


				endwhile; // End of the loop.
				?>
<?php
     //do_action('charitize_customizer_link');


get_footer();