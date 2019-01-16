<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<footer>
	
	<div class="row">
		<div class="col-12 col-sm-12 col-md-3 footer-logo d-flex">
			<div class="text-center">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php the_field('logo_footer', 'options');?>"></a>
				<?php if(get_field('email', 'options')): ?>
					<a class="email" href="mailto:<?php the_field('email', 'options');?>"><span><?php the_field('email', 'options');?></span></a>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-6 menu d-flex">
			<ul>
				<?php 
	                 $menuLocations = get_nav_menu_locations(); 
	                 $menuID = $menuLocations['main-nav']; 
	                 $primaryNav = wp_get_nav_menu_items($menuID); 
	                
	                
	                foreach ( $primaryNav as $navItem ) {
	                  echo '<li class="nav-item"> 
	                            <a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a> 

	                        </li>';
	                }
             	?>
			</ul>
			
		</div>
		
		<?php if( have_rows('social', 'options') ): ?>

		<div class="col-12 col-sm-12 col-md-3 social d-flex">
			<ul>

				<?php while( have_rows('social', 'options') ): the_row(); 

					// vars
					$logo = get_sub_field('logo');
					$name = get_sub_field('name');
					$link = get_sub_field('link');

					?>
					<li>
						<a target="_blank" href="<?php echo $link; ?>"><img src="<?php echo $logo; ?>"><span><?php echo $name; ?></span></a>
						
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<?php endif; ?>

	</div>
</footer>
</div>
<!-- Boostrap -->

<script src="<?php bloginfo('template_url'); ?>/data/bootstrap/js/popper.min.js"></script>	

<!-- Slick -->
<script src="<?php bloginfo('template_url'); ?>/data/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/data/js/slick_slider.js"></script>	
<!-- Aos -->
<script src="<?php bloginfo('template_url'); ?>/data/aos/aos.js"></script>
<script>
  AOS.init();
</script>
<?php wp_footer(); ?>

</body>
</html>
