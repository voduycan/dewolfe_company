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
		<div class="col-12 col-sm-12 col-md-3 footer-logo">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php the_field('logo_footer', 'options');?>"></a>
			<a class="email" href="mailto:edu@dewolfe.io"><?php echo $group['email']; ?></a>
			
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
		<?php
			if(($group['facebook'])||($group['twitter'])||($group['instagram'])): 
		?>
		<div class="col-12 col-sm-12 col-md-3 social d-flex">
			<?php if($group['facebook']): ?>
				<a target="_blank" href="<?php echo $group['facebook']; ?>"><span class="icon-facebook"></span></a>
			<?php endif; ?>
			<?php if($group['twitter']): ?>
				<a target="_blank" href="<?php echo $group['twitter']; ?>"><span class="icon-twitter"></span></a>
			<?php endif; ?>
			<?php if($group['instagram']): ?>
				<a target="_blank" href="<?php echo $group['instagram']; ?>"><span class="icon-instagram"></span></a>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<div class="col-12 col-sm-12 col-md-12 copy-right">
			<p><?php echo $group['copy_right']; ?></p>
		</div>

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
