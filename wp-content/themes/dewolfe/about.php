<?php
/**
* Template Name: about
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
   <!--  <div class="adoption d-flex">
        <?php the_field('deception_s1', $post_ID) ?>
    </div> -->
   
    <div class="caption" id="caption-home">
        <div class="content">
            <div class="over-lay-caption"></div>
            <div class="caption-scroll">
                <h1><?php the_field('title_s1', $post_ID) ?></h1>
                <?php the_field('text_s1', $post->ID); ?>
                <button class="btn btn-blue" data-toggle="modal" data-target="#exampleModal"><?php the_field('sign_up_button_s1', $post_ID) ?></button>
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
    
</section>
<!-- End Top panel -->

<!-- Why Choose US -->
<section class="why-choose-us">
    <h2><?php the_field('title_s2', $post_ID) ?></h2>

    <?php if( have_rows('card_s2') ): 
        $i = 0;
        while( have_rows('card_s2') ): the_row(); 
            // vars
            $title = get_sub_field('title');
            $image = get_sub_field('image');
            $sub_text = get_sub_field('sub_text');
            $text = get_sub_field('text');
            $i++;
    ?>
    <?php if(($i % 2) == 1): ?>
        <div class="left mb">
            <div class="row">
                <div class="col-sm-12 col-md-4 offset-md-1">
                    <div class="text d-flex">
                        <div>
                            <h5 class="title-h5"><?php echo $title; ?></h5>
                            <?php echo $text; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 offset-md-1">
                    <div class="image" style="background-image: url('<?php echo $image; ?>');">
                        <div class="box d-flex">
                            <div>
                                <h5 class="title-h5"><?php echo $title; ?></h5>
                                <?php echo $sub_text; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="right mb">
            <div class="row">
                <div class="col-sm-12 col-md-5 offset-md-1">
                    <div class="image" style="background-image: url('<?php echo $image; ?>');">
                        <div class="box d-flex">
                            <div>
                                <h5 class="title-h5"><?php echo $title; ?></h5>
                                <?php echo $sub_text; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 offset-md-1">
                    <div class="text d-flex">
                       <div>
                            <h2><?php echo $title; ?></h2>
                            <div class="pd-left">
                                <?php echo $text; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php endwhile; endif; ?>
</section>
<!--End Why Choose US -->

<!-- Capital -->
<section class="capital">
    <div class="row">
        <div class="col-sm-12 col-md-5 offset-md-1">
            <div class="image" style="background-image: url('<?php the_field('image_s3', $post_ID); ?>');"></div>
        </div>
        <div class="col-sm-12 col-md-5  d-flex">
            <div class="box">
                <h2><?php the_field('title_s3', $post_ID); ?></h2>
                <?php the_field('text_s3', $post_ID); ?>
            </div>
        </div>
    </div>
</section>
<!-- End Capital -->

<!-- Our Team -->
<section class="our-team">
    <h2><?php the_field('title_s4', $post_ID); ?></h2>
    <div class="team slider">
        <?php if( have_rows('card_s4') ): 
            while( have_rows('card_s4') ): the_row(); 
                // vars
                $name = get_sub_field('name');
                $image = get_sub_field('image');
                $work = get_sub_field('work');
                $text = get_sub_field('text');
        ?>
        <div>
            <div class="row">

                <div class="col-sm-12 col-md-5 offset-md-1 p-right">
                    <div class="d-flex">
                        <div class="about">
                            <img class="bg-img" src="<?php bloginfo('template_url'); ?>/data/image/png/bg-product.png">
                           <div class="mb-3">
                                <h3><?php echo $name; ?></h3>
                                <span class="work"><?php echo $work; ?></span>
                           </div>
                            <?php echo $text; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 p-left">
                    <div class="image" style="background-image: url('<?php echo $image; ?>');">
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
        
    </div>
</section>
<!-- End Our Team -->

<?php  get_footer(); ?>

