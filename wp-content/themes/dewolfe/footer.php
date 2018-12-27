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
	<?php $group = get_field('group_footer', 'options'); 
        if($group):
    ?>
	<div class="row">
		<div class="col-12 col-sm-12 col-md-3 footer-logo d-flex">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php the_field('logo_footer', 'options');?>"></a>
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
             	<li class="nav-item"> 
                    <a href="">About</a> 
                </li>
			</ul>
			
		</div>
		<?php
			if(($group['facebook'])||($group['email'])||($group['copy_right'])): 
		?>
		<div class="col-12 col-sm-12 col-md-3 social d-flex">
			<ul>
				<?php if($group['copy_right']): ?>
					<li class="copy-right"><?php echo $group['copy_right']; ?></li>
				<?php endif; ?>
				<?php if($group['facebook']): ?>
					<li>
						<a target="_blank" href="<?php echo $group['facebook']; ?>"><span class="icon-facebook"></span></a>
						<span><?php echo $group['facebook_name']; ?></span>
					</li>
				<?php endif; ?>
				<?php if($group['email']): ?>
					<li>
						<a href="mailto:<?php echo $group['email']; ?>"><span class="icon-mail"></span></a>
						<span><?php echo $group['email']; ?></span>
					</li>
				<?php endif; ?>
			</ul>
		</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
</footer>
</div>
<!-- Boostrap -->

<script src="<?php bloginfo('template_url'); ?>/data/bootstrap/js/popper.min.js"></script>	

<!-- Slick -->
<script src="<?php bloginfo('template_url'); ?>/data/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/data/js/slick_slider.js"></script>	

<?php wp_footer(); ?>

</body>
</html>
