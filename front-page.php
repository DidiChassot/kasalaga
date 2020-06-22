<?php
/**
 * The template for displaying home page.
 * @package business-craft
 */
global $charitize_customizer_all_values;

get_header();
?>
<img class="home_banner" src="<?php echo get_bloginfo('template_url') ?>/img/home_banner.jpg"/>

<div class="site-content" id="home_content">
<?php
	while ( have_posts() ) : the_post();
		the_content(); 
	endwhile; // End of the loop.

     //do_action('charitize_customizer_link');
?>
<div class="clear"></div>
	<div id="sitation">
				<blockquote>« Construire un pont de solidarité pour que des enfants démunis aient accès à l’éducation »
								<span>Awilo Ochieng Pernet, <br>
								<i>Présidente de l’Association des Amis de Kasalaga</i></span>
				</blockquote>
				<blockquote>« Aucun de nous ne s’est élevé à la seule force de son poignet. Nous sommes arrivés parce que quelqu’un s’est baissé pour nous aider. »
								<span><i>Thurgood Marshall</i></span>
				</blockquote>
				<blockquote>« L’éducation est l’arme la plus puissante que vous puissiez utiliser pour changer le monde »
								<span><i>Nelson Mandela</i></span>
				</blockquote>
	</div>
	<img class="home_img" src="<?php echo get_bloginfo('template_url') ?>/img/home.png"/>
</div>

<?php get_footer();