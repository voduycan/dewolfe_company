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
   
    <div class="caption" id="caption-home">
        <div class="content">
            <div class="over-lay-caption"></div>
            <div class="caption-scroll">
                <h1><?php the_field('title_s1', $post_ID) ?></h1>
                <?php the_field('text_s1', $post->ID); ?>
                <?php if(get_field('sign_up_button_s1', $post_ID)): ?>
                    <button class="btn btn-blue" data-toggle="modal" data-target="#exampleModal"><?php the_field('sign_up_button_s1', $post_ID) ?></button>
                <?php endif; ?>
            </div>
           
            <ol class="carousel-indicators">
                <?php if($n > 1): ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <?php for ($i=1; $i < $n; $i++): ?> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
                    <?php endfor; ?>
                <?php endif; ?>
            </ol>
        </div>
    </div>
    <div class="caption-mobile">
        <!-- <ol class="carousel-indicators mobile">
            <?php if($n > 1): ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <?php for ($i=1; $i < $n; $i++): ?> 
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
                <?php endfor; ?>
            <?php endif; ?>
        </ol> -->
        <h1><?php the_field('title_s1', $post_ID) ?></h1>
        <?php the_field('text_s1', $post->ID); ?>
        <?php if(get_field('sign_up_button_s1', $post_ID)): ?>
            <button class="btn btn-blue" data-toggle="modal" data-target="#exampleModal"><?php the_field('sign_up_button_s1', $post_ID) ?></button>
        <?php endif; ?> 
    </div>
</section>
<!-- End Top panel -->

<!-- partners -->
<section class="partners">
    <?php if( have_rows('partners_s2') ): 
        while( have_rows('partners_s2') ): the_row(); 
            // vars
            $title = get_sub_field('title');
        ?>
        <h6><?php echo $title; ?></h6>

        <?php if( have_rows('logo_s2') ):
            while( have_rows('logo_s2') ): the_row(); 
                // vars
                $image = get_sub_field('image');
        ?>
            <img  data-aos="fade-up" data-aos-duration="500"  src="<?php echo $image; ?>" alt="">
        <?php endwhile; endif; ?>
    <?php endwhile; endif; ?>
    
</section>
<!-- End partners -->

<!-- Our Products -->
<section class="our-products">
    <h2><?php the_field('title_s3', $post_ID); ?></h2>
    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        <?php if( have_rows('products_s3') ): 
                $count = -1;
        ?>
            <ol class="carousel-indicators" id="ol-cap">
                <?php
                    while( have_rows('products_s3') ): the_row(); 
                        // vars
                        $count++;
                    ?>
                    <li id="count<?php echo($count); ?>" data-target="#carouselExampleIndicators2" data-slide-to="<?php echo($count); ?>"></li>
                <?php endwhile; ?>
            </ol>
        <?php endif; ?>

        <div class="carousel-inner">
            <?php if( have_rows('products_s3') ): 
                $crs = 0;
            while( have_rows('products_s3') ): the_row(); 
                // vars
                $logo = get_sub_field('logo');
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $sub_title = get_sub_field('sub_title');
                $text = get_sub_field('text');
                $sub_text = get_sub_field('sub_text');
                $sign_up_buton = get_sub_field('sign_up_buton');
                $comming = get_sub_field('comming');
                $issuer_field = get_sub_field('issuer_field');
                $crs++;
            ?>
            <div class="carousel-item" id="crs<?php echo($crs);?>">
              <div class="row">

                    <div class="col-sm-12 col-md-5 offset-md-1  d-flex" id="cap-scroll">
                        <!-- <img class="bg-product" src="<?php bloginfo('template_url'); ?>/data/image/png/bg-product.png"> -->
                        <div class="cap  cap-scroll">
                            <div class="top">
                                <div class="logo" style="background-image: url('<?php echo $logo;?>');"></div>
                                <div class="title">
                                    <h3><?php echo $title; ?></h3>
                                    <span><?php echo $sub_title; ?></span>
                                </div>
                            </div>
                            <div class="bottom">
                                <?php echo $text; ?>
                               
                                <div class="mt-3">
                                    <?php if($comming): ?>
                                        <h5><?php echo $comming; ?></h5>
                                    <?php endif; ?>
                                    <?php if($sign_up_buton): ?>
                                        <button class="btn btn-blue" data-toggle="modal" data-target="#exampleModal"><?php echo $sign_up_buton; ?></button>
                                    <?php endif; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="cap  cap-scroll-mobile">
                            <div class="top">
                                <div class="logo" style="background-image: url('<?php echo $logo;?>');"></div>
                                <div class="title">
                                    <h3><?php echo $title; ?></h3>
                                    <span><?php echo $sub_title; ?></span>
                                </div>
                            </div>
                            <div class="bottom">
                                <?php echo $text; ?>
                               
                                <div class="mt-3">
                                    <?php if($comming): ?>
                                        <h5><?php echo $comming; ?></h5>
                                    <?php endif; ?>
                                    <?php if($sign_up_buton): ?>
                                        <button class="btn btn-blue" data-toggle="modal" data-target="#exampleModal"><?php echo $sign_up_buton; ?></button>
                                    <?php endif; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="img-right" style="background-image: url('<?php echo $image; ?>');"></div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <a class="carousel-control-prev carousel-control" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next carousel-control" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- End Our Products -->

<!-- Press -->
<section class="press">
    <h2><?php the_field('title_s4', $post_ID); ?></h2>
    <div class="foundation slider" id="press-cards">
        <?php if( have_rows('press_s4_2') ):
        while( have_rows('press_s4_2') ): the_row(); 
            //vars
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $time = 1;
        ?>
        <div>
            <div class="card">
                <div class="content">
                    <div class="card-img-top d-flex">
                        <img src="<?php echo $image; ?>">
                    </div>
                    <div class="card-body">
                        <div class="card-body-desk">
                            <h5><?php echo $title; ?></h5>
                            <?php echo $text; ?>
                        </div>
                        <div class="card-body-mobile">
                            <h5><?php echo $title; ?></h5>
                            <?php echo $text; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>

    <?php if( have_rows('press_s4_2') ): ?>
        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
             <?php
                $press_slide = -1;
                while( have_rows('press_s4_2') ): the_row(); 
                    //vars
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $press_slide++;
            ?>
                
                <div class="carousel-item" id="press-slide-<?php echo $press_slide; ?>">
                    <div class="card">
                        <div class="content">
                            <div class="card-img-top d-flex">
                                <img src="<?php echo $image; ?>">
                            </div>
                            <div class="card-body">
                                <h5><?php echo $title; ?></h5>
                                <?php echo $text; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php endwhile;?>
            </div>
            <a class="carousel-control-prev carousel-control" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next carousel-control" href="#carouselExampleIndicators3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <?php endif; ?>
</section>
<!-- End Press -->

<?php  get_footer(); ?>

