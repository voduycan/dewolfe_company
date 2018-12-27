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
        <p><strong>DeWolfe Group</strong> is a blockchain technology firm dedicated to bringing cutting-edge tech to widespread adoption.</p>
    </div>
   
    <?php $group = get_field('group_s1'); 
        if($group):
    ?>

        <div class="caption" id="caption-home">
            <div class="content">
                <h1><?php echo $group['title']; ?></h1>
                <?php the_field('text_s1', $post->ID); ?>
                <button class="btn btn-blue" data-toggle="modal" data-target="#exampleModal"><?php echo $group['button']; ?></button>
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
    <?php endif; ?>

    
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
    <p>alliances</p>
    <img  src="<?php bloginfo('template_url'); ?>/data/image/png/forbes.png" alt="">
    <img  src="<?php bloginfo('template_url'); ?>/data/image/png/havard.png" alt="">
    <img  src="<?php bloginfo('template_url'); ?>/data/image/png/massa.png" alt="">
    <img  src="<?php bloginfo('template_url'); ?>/data/image/png/technet.png" alt="">
    <img  src="<?php bloginfo('template_url'); ?>/data/image/png/huyndai.png" alt="">   
</section>
<!-- End partners -->

<!-- Our Products -->
<section class="our-products">
    <h2 class="decoration">out products</h2>
    <div class="autoplay slider">
        <div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="cap">
                        <div class="logo" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/logo_white.png');"></div>
                        <div class="content">
                            <div class="top">
                                <h3>DeWolfe Joint Venture</h3>
                                <span>Columbia, SC</span>
                            </div>
                            <div class="bottom">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <span class="mb-1">Issuer field</span>
                                <p class="mb-1">Convexity Properties</p>
                                <ul>
                                    <li>$21,000 per token</li>
                                    <li>$21,000 per token</li>
                                </ul>
                                <h5>Coming Soon</h5>
                                <button class="btn btn-blue">Sign Up With Email</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 offset-md-1">
                    <div class="img-right" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/test.jpg');"></div>
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="cap">
                        <div class="logo" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/logo_white.png');"></div>
                        <div class="content">
                            <div class="top">
                                <h3>DeWolfe Joint Venture</h3>
                                <span>Columbia, SC</span>
                            </div>
                            <div class="bottom">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <span class="mb-1">Issuer field</span>
                                <p class="mb-1">Convexity Properties</p>
                                <ul>
                                    <li>$21,000 per token</li>
                                    <li>$21,000 per token</li>
                                </ul>
                                <h5>Coming Soon</h5>
                                <button class="btn btn-blue">Sign Up With Email</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 offset-md-1">
                    <div class="img-right" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/test.jpg');"></div>
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="cap">
                        <div class="logo" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/logo_white.png');"></div>
                        <div class="content">
                            <div class="top">
                                <h3>DeWolfe Joint Venture</h3>
                                <span>Columbia, SC</span>
                            </div>
                            <div class="bottom">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <span class="mb-1">Issuer field</span>
                                <p class="mb-1">Convexity Properties</p>
                                <ul>
                                    <li>$21,000 per token</li>
                                    <li>$21,000 per token</li>
                                </ul>
                                <h5>Coming Soon</h5>
                                <button class="btn btn-blue">Sign Up With Email</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 offset-md-1">
                    <div class="img-right" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/test.jpg');"></div>
                </div>
            </div>
        </div>
        
            
    </div>
</section>
<!-- End Our Products -->

<!-- Press -->
<section class="press">
    <h2 class="decoration">press</h2>
    <div class="autoplay slider">
        <div>
            <div class="card-deck">
                <div class="card">
                    <div class="card-img-top d-flex">
                        <img src="<?php bloginfo('template_url'); ?>/data/image/png/technet.png">
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-top d-flex">
                        <img src="<?php bloginfo('template_url'); ?>/data/image/png/forbes.png">
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-top d-flex">
                        <img src="<?php bloginfo('template_url'); ?>/data/image/png/huyndai.png">
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting. </p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card-deck">
                <div class="card">
                    <div class="card-img-top d-flex">
                        <img src="<?php bloginfo('template_url'); ?>/data/image/png/technet.png">
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-top d-flex">
                        <img src="<?php bloginfo('template_url'); ?>/data/image/png/forbes.png">
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-top d-flex">
                        <img src="<?php bloginfo('template_url'); ?>/data/image/png/huyndai.png">
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting. </p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card-deck">
                <div class="card">
                    <div class="card-img-top d-flex">
                        <img src="<?php bloginfo('template_url'); ?>/data/image/png/technet.png">
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-top d-flex">
                        <img src="<?php bloginfo('template_url'); ?>/data/image/png/forbes.png">
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-top d-flex">
                        <img src="<?php bloginfo('template_url'); ?>/data/image/png/huyndai.png">
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting. </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Press -->
<?php  get_footer(); ?>

