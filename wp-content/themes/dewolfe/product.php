<?php
/**
 * Template Name: product
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
<?php  get_header(); ?>
<!-- Top Panel - Blockchain winter camp -->
<section id="carouselExampleIndicators" class="carousel slide product-panel" data-ride="carousel">
  <div class="overflow full-device-width">
    <div class="over-lay"></div>
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
            </div>
        <?php endif; ?>
               
        
    </div>
    <?php $group = get_field('group_s1'); 
        if($group):
    ?>

        <div class="caption">
            <div class="cap">
                <h1><?php echo $group['title']; ?></h1>
                <?php if(get_field('text_s1', $post->ID)): ?>
                  <div class="cap-scroll">
                      <?php the_field('text_s1', $post->ID); ?>
                  </div>
                <?php endif; ?>
                <button class="btn btn-blue" data-toggle="modal" data-target="#exampleModal"><?php echo $group['button_pro_1']; ?></button>
                <a target="_blank" href="<?php echo $group['button_link_2']; ?>" class="btn btn-light"><?php echo $group['button_pro_2']; ?></a>
            </div>
            
            <?php if($n > 1): ?>
              <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <?php for ($i=1; $i < $n; $i++): ?> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
                    <?php endfor; ?>
              </ol> 
            <?php endif; ?>
        
        </div>
    <?php endif; ?>

    
    <?php if($n > 1): ?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    <?php endif; ?>
    
</section>
<!-- End Top panel -->

<!-- Slide -->
<section class="curriculum text-center">
  <h2><?php the_field('title_s2', $post->ID); ?></h2>
  <p class="text"><?php the_field('text_s2', $post->ID); ?></p>
  <h5><?php the_field('foundation_title', $post->ID); ?></h5>
  <?php if( have_rows('card_s2') ): ?>
  <div class="foundation slider">
    <?php while( have_rows('card_s2') ): the_row(); 

    // vars
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $image = get_sub_field('image');

    ?>
    <div>
      <div class="card">
        <div class="card-img-top">
          <img src="<?php echo $image; ?>" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $title; ?></h5>
          <p class="card-text"><?php echo $text; ?></p>
        </div>
      </div>
    </div>

    <?php endwhile; ?>
  </div>
  <?php endif; ?>

  <h5><?php the_field('practical_title', $post->ID); ?></h5>
  <?php if( have_rows('card_s2') ): ?>
  <div class="Practical slider">
    <?php while( have_rows('card_s2_2') ): the_row(); 

    // vars
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $image = get_sub_field('image');

    ?>
    <div>
      <div class="card">
        <div class="card-img-top">
          <img src="<?php echo $image; ?>" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $title; ?></h5>
          <p class="card-text"><?php echo $text; ?></p>
        </div>
      </div>
    </div>

    <?php endwhile; ?>
  </div>
  <?php endif; ?>
    
  <button class="btn btn-blue" data-toggle="modal" data-target="#exampleModal"><?php the_field('button_s2', $post->ID); ?></button>
</section>
<!-- End Slide -->
<!-- Blockchain -->
<section class="blockchain text-center">
 <img class="bg-img" src="<?php bloginfo('template_url'); ?>/data/image/png/bg-elip-blue.png">
  <h2><?php the_field('title_s3', $post->ID) ?></h2>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-5">
      <div class="video">
        <div class="background" style="background-image: url('<?php the_field('image_s3', $post->ID) ?>');">
          <div class="play-button d-flex">
            <img src="<?php bloginfo('template_url'); ?>/data/image/png/play-button.png">
          </div>
        </div>
        <div class="play-video d-none"></div>
      </div>
    </div>
    <div class="col-12 offset-md-1 col-sm-12 col-md-6 text-left">
      <?php the_field('text_s3', $post->ID) ?>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      var loading = '<img id="loading-img" width="30" height="30" alt="loading" src="<?php bloginfo('template_url'); ?>/data/image/svg/loading.svg"/>';
      $('.play-button').click(function(){

          $.ajax({
                type : 'post',
                url : '<?php echo admin_url('admin-ajax.php'); ?>',
                dataType : 'json',
                data : {
                    action : 'playvideo',
                    id : <?php echo $post->ID; ?>,
                },
                beforeSend : function(){
                    $('.play-button').css('background','none');
                    $('.play-button').html(loading);
                }, 
                success : function(result){
                  $('.background').addClass('d-none');
                  var vt = result.indexOf('?');
                  var src = result.slice(0,vt+1) + 'autoplay=1&muted=1' + result.slice(vt+1);
                    $('.play-video').append(src);
                    $('.play-video').removeClass('d-none');
                },
                 error: function(jqXHR,textStatus,errorThrown){
                    console.log('The following error occured: ' + textStatus, errorThrown);
                },
           });
        });
    });
  </script>
</section>
<!-- End Blockchain -->
<!-- our staff -->
<section class="our-staff" id="our-staff">
  <h2><?php the_field('title_s4', $post->ID) ?></h2>
  <img class="background-img" src="<?php bloginfo('template_url'); ?>/data/image/png/bg-elip_2.png">

  <?php if( have_rows('card_s4') ): ?>

  <div class="staff slider">

  <?php while( have_rows('card_s4') ): the_row(); 
    // vars
    $avarta = get_sub_field('avarta');
    $name = get_sub_field('name');
    $work = get_sub_field('work');
    $about = get_sub_field('about');
    ?>
    <div>
      <div class="card">
        <div class="top">
          <div class="border-big">
            <div class="avarta" style="background-image: url('<?php echo $avarta; ?>');"></div>
          </div>
          <div class="info d-flex">
            <h3><?php echo $name; ?></h3>
            <span><?php echo $work; ?></span>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text"><?php echo $about; ?></p>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  </div>
  <?php endif; ?>
    
</section>
<section class="trips">
  <h2><?php the_field('title_s6', $post->ID) ?></h2>
  <?php if( have_rows('slide_image_s6') ): $i = 0; ?>
    <div class="slider slider-for">
      <?php while( have_rows('slide_image_s6') ): the_row(); 

        // vars
        $image = get_sub_field('image');
        $text = get_sub_field('text');
        $i++;

        ?>
        <div class="image-for" style="background-image: url('<?php echo $image; ?>');">
           <p class="text"><?php echo $text; ?></p>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>

<?php if( $i > 1 ): ?>
  <?php if( have_rows('slide_image_s6') ): ?>
    <div class="slider slider-nav">
      <?php while( have_rows('slide_image_s6') ): the_row(); 
          // vars
          $image = get_sub_field('image');
          if($image):
      ?>

        <div class="image-nav" style="background-image: url('<?php echo $image; ?>">
          <div class="over-lay"></div>
        </div>
        <?php endif; ?>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
<?php endif; ?>
</section>
<!-- End our staff -->
<!-- Journey -->
<section class="journey" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/bg-elip-jouney.png'), url('<?php the_field('background_big_s5', $post->ID); ?>')">

  <?php $group = get_field('group_s5'); 
        if($group):
    ?>
    <div class="over-lay"></div>
    <div class="row">
        <div class="my-col-md-6 text">
            <h2><?php echo $group['title_s5']; ?></h2>
            <?php the_field('text_s5', $post->ID); ?>
            <div class="button">
                <button class="btn btn-blue" data-toggle="modal" data-target="#exampleModal"><?php echo $group['apply_button_s5']; ?></button>
                <a target="_blank" href="<?php echo $group['learn_button_link_s5']; ?>" class="btn btn-light"><?php echo $group['learn_button_s5']; ?></a>
            </div>
        </div>
        <div class="my-col-md-6 image" style="background-image: url('<?php the_field('image_s5', $post->ID); ?>');">
        </div>
    </div>
  <?php endif; ?>
</section>
<!-- End Journey -->
<?php  get_footer(); ?>