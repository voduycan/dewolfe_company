<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image"content="<?php the_field('logo_fixed', 'options'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<!-- Bootstrap -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/data/bootstrap/css/bootstrap.min.css">
<script src="<?php bloginfo('template_url'); ?>/data/bootstrap/js/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/data/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/data/js/jquery.word-break-keep-all.min.js"></script>

<!-- Scroll -->
<link type="text/css" href="<?php bloginfo('template_url'); ?>/data/scroll/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/data/scroll/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/data/scroll/jquery.jscrollpane.min.js"></script>

<!-- Slick -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/data/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/data/slick/slick-theme.css">
<!-- Aos -->
<link href="<?php bloginfo('template_url'); ?>/data/aos/aos.css" rel="stylesheet">
<!-- Custom Css -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/data/scss/main.css">

</head>

<body <?php body_class(); ?>>
<div class="container">
	<header id="header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
				<img class="logo-normal" src="<?php the_field('logo_header', 'options'); ?>">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<img src="<?php bloginfo('template_url'); ?>/data/image/svg/menu.svg">
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ">
					<?php 
		                 $menuLocations = get_nav_menu_locations(); 
		                 $menuID = $menuLocations['main-nav']; 
		                 $primaryNav = wp_get_nav_menu_items($menuID); 
		                
		                
		                foreach ( $primaryNav as $navItem ) {
		                    $sss = '';
		                    if($navItem->object_id == $post->ID){
		                        $sss .= "active";
		                    }
		                    
		                    foreach ( $navItem->classes as $a ) {
		                        $sss .= " ".$a;
		                    }
		                  echo '<li class="nav-item '.$sss.'"> 
		                            <a class="nav-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a> 

		                        </li>';
		                }
	             	?>
                    <li class="nav-item">
                        <button class="btn btn-blue"><?php the_field('sign_up_button', 'options'); ?></button>
                    </li>
				</ul>
			</div>
		</nav>
	</header>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle"><?php the_field('title_form', 'options'); ?></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php the_field('form', 'options'); ?>
      </div>
    </div>
  </div>
</div>

	
