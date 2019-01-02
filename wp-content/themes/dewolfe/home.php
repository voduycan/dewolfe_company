<?php
/**
* Template Name: home
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

?>
<?php  get_header(); ?>

<!-- Top Panel - Blockchain winter camp -->
<section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <?php if( have_rows('images_s1')): $n = 0; ?>
        <div class="carousel-inner">
            <?php while( have_rows('images_s1') ): the_row();
                // vars
                $image = get_sub_field('image');
                $n++;
            ?>
                <div class="carousel-item" id="no-<?php echo($n); ?>" style="background-image: url('<?php echo $image; ?>')">
                </div>
            <?php endwhile; ?>
            <div class="over-lay"></div>
        </div>
    <?php endif; ?>
    <div class="adoption d-flex">
        <?php the_field('deception_s1', $post_ID) ?>
    </div>
   
    <div class="caption" id="caption-home">
        <div class="content">
            <h1><?php the_field('title_s1', $post_ID) ?></h1>
            <?php the_field('text_s1', $post->ID); ?>
            <button class="btn btn-blue" data-toggle="modal" data-target="#exampleModal"><?php the_field('sign_up_button_s1', $post_ID) ?></button>
        </div>
    </div>
    <ol class="carousel-indicators">
        <?php if($n > 1): ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <?php for ($i=1; $i < $n; $i++): ?> 
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
            <?php endfor; ?>
        <?php endif; ?>
    </ol>

    
   <!--  <?php if($n > 1): ?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    <?php endif; ?> -->
    
</section>
<!-- End Top panel -->

<!-- partners -->
<section class="partners">
    <?php if( have_rows('partners_s2') ): 
        while( have_rows('partners_s2') ): the_row(); 
            // vars
            $title = get_sub_field('title');
        ?>
        <p><?php echo $title; ?></p>

        <?php if( have_rows('logo_s2') ):
            while( have_rows('logo_s2') ): the_row(); 
                // vars
                $image = get_sub_field('image');
        ?>
            <img  src="<?php echo $image; ?>" alt="">
        <?php endwhile; endif; ?>
    <?php endwhile; endif; ?>
    
</section>
<!-- End partners -->

<!-- Our Products -->
<section class="our-products">
    <h2 class="decoration"><?php the_field('title_s3', $post_ID); ?></h2>
    <div class="autoplay slider">
        <?php if( have_rows('products_s3') ): 
        while( have_rows('products_s3') ): the_row(); 
            // vars
            $logo = get_sub_field('logo');
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $sub_title = get_sub_field('sub_title');
            $text = get_sub_field('text');
            $sub_text = get_sub_field('sub_text');
            $sign_up_buton = get_sub_field('sign_up_buton');
            $issuer_field = get_sub_field('issuer_field');
        ?>

        <div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="cap">
                        <div class="logo" style="background-image: url('<?php echo $logo;?>');"></div>
                        <div class="content">
                            <div class="top">
                                <h3><?php echo $title; ?></h3>
                                <span><?php echo $sub_title; ?></span>
                            </div>
                            <div class="bottom">
                                <?php echo $text; ?>
                                <span class="mb-1"><?php echo  $issuer_field; ?></span>
                                <?php echo $sub_text; ?>
                                <button class="btn btn-blue"><?php echo $sign_up_buton; ?></button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 offset-md-1">
                    <div class="img-right" style="background-image: url('<?php echo $image; ?>');"></div>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
        
            
    </div>
</section>
<!-- End Our Products -->

<!-- Press -->
<section class="press">
    <h2 class="decoration"><?php the_field('title_s4', $post_ID); ?></h2>
    <div class="autoplay slider">
        <?php if( have_rows('press_s4') ): 
        while( have_rows('press_s4') ): the_row(); 
        ?>
        <div>
            <div class="card-deck">
                <?php if( have_rows('card') ): 
                while( have_rows('card') ): the_row(); 
                    //vars
                    $image = get_sub_field('image');
                    $text = get_sub_field('text');
                ?>
                <div class="card">
                    <div class="card-img-top d-flex">
                        <img src="<?php echo $image; ?>">
                    </div>
                    <div class="card-body">
                        <?php echo $text; ?>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>
<!-- End Press -->

<?php  get_footer(); ?>

