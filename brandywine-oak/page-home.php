<?php
/**
 * Template Name: Home Page
 * @package Wyeth
 */

  get_header( 'special' );
  while ( have_posts() ) : the_post();
    $banner       = get_the_post_thumbnail_url();
    $introduction = get_field('page_introduction');
    $subhead = get_field('page_subhead');
    $learn_more_link = get_field('learn_more_link');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="bo-height">
    <header class="entry-header entryBanner _step_1" data-js-component="homeScroll">
      <div class="entryBanner_banner" style="background-image:url(<?= $banner ?>);" data-js-component="bannerAnimate"></div>
          <div class="entryBanner_content">
        <div class="entryBanner_contentInner">
          <div class="row column">
            <div class="entryIntro bo-header-font"><?= $introduction ?></div>
            <h2 class="tagline">
            <?= $subhead ?>
            </h2>
            <?php if($learn_more_link): ?>
              <a href="<?= $learn_more_link ?>" class="banner_link">Learn More</a>
            <?php endif; ?>
          </div>
          <div class="svg_wrap" style="display: none;">
              <?php include 'home.svg'; ?>
          </div>
        </div>
      </div>

      <?php
        // Field Definitions
        $slides = get_field('text_slideshow');
        if($slides):
      ?>
        <div class="textSlideshow_block entryBanner_slideshow">
          <div class="row column">
            <div class="textSlideshow bo-mobile-slideshow" data-js-component="textSlideshow">
              <?php foreach($slides as $slide): ?>
                <div class="textSlideshow_slide">
                  <p><?= $slide['slide_text']; ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <div class="entryBanner_nav">
        <a href="#" class="entryBanner_more"><span>More</span></a>
      </div>
    </header>
    

  <!-- .entry-header -->
  <div class="entry-content"></div>
</article>

<!-- #post-<?php the_ID(); ?> -->

<!-- Posts and Video Card Group -->
<div class="card-group">

  <!-- Post Card #1 -->
  <div class="card bo-white-bottom">
    <div class="card-body" style="padding-bottom: 0px;">
        <!-- // Define our WP Query Parameters -->
        <?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
        <!-- // Start our WP Query -->
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <h1  class="bo-news">NEWS  |  <?php the_date(); ?></h1>
        <!-- // Display the Post Title with Hyperlink -->
        <p><a class="bo-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
  </div>

  <div class="vl"></div>
    
  <!-- Post Card #2 -->
  <div class="card bo-white-bottom">
    <div class="card-body" style="padding-bottom: 0px;">
        <!-- // Define our WP Query Parameters -->
        <?php $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 1 ) ); ?>
        <!-- // Start our WP Query -->
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <h1 class="bo-news">NEWS  |  <?php the_date(); ?></h1>
        <!-- // Display the Post Title with Hyperlink -->
        <p><a class="bo-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
  </div>

  <div class="vl"></div>
    
  <!-- Video Card -->
  <div class="card">
    <div class="card-body bo-2-column bo-mobile-padding">
      <h1 class="bo-news">LEARN MORE</h1>
      <p class="bo-title">An Exciting Update from Brandywine Oak</p>
      <a href="#" onclick="lightbox_open_custom();"><img src="<?php echo get_template_directory_uri(); ?>/img/video_thumbnail.png"></a>
    </div>
  </div>

</div>

<div class="bo-title bo-hide-mobile"></div>

</div>
</div>
</div>
</div>

  <!--/ video snapshot -->
  <div id="main-video">
    <span class="close-window" onclick="lightbox_close_custom();">X</span>
      <div id="video-content" width="100%">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/arar9gRX37k?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
  </div>

</div>

<!-- Accolades -->
<div class="card-group">
  
  <!-- Desktop view -->
  <div class="bo-display-desktop">
    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2021/10/Accolades-Desktop-Sep21-smaller.jpg" alt="Row of Brandywine Oak Accolades" class="bo-horizontal-center">
      </div>
    </div>
  </div>

  <!-- Tablet view -->
  <div class="bo-display-tablet">
    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2021/10/Accolades-Tablet_Sep21.jpg" alt="Two Rows of Brandywine Oak Accolades" class="bo-horizontal-center">
      </div>
    </div>
  </div>

  <!-- Mobile view -->
  <div class="bo-accolades-mobile">

    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2021/10/SHOOK-Badge-NextGen-Color.jpg" alt="2021 Forbes Best-In-State Wealth Advisors" id="bo-horizontal-center">
      </div>
    </div>

    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2021/04/2021-Barrons-top1200.png" alt="2021 Barrons Top 1200" id="bo-horizontal-center">
      </div>
    </div>

    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2021/03/Forbes-2021-SHOOK-BestInState.jpg" alt="Forbes 2021 Best in State" id="bo-horizontal-center">
      </div>
    </div>

    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2021/04/2021-SHOOK-Badge-TopWomen-Color.png" alt="Forbes 2021 Top Women" id="bo-horizontal-center">
      </div>
    </div>

    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2020/06/Barrons.png" alt="Barrons" class="bo-logo-smaller bo-horizontal-center">
      </div>
    </div>

    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2020/06/Forbes2020.png" alt="Forbes 2020" id="bo-horizontal-center">
      </div>
    </div>

    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2020/06/ForbesWomen2020.png" alt="Forbes Women 2020" id="bo-horizontal-center">
      </div>
    </div>

    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2021/03/2020-Forbes-SR-2020-Top-Next-Gen-Wealth-Advisors.png" alt="Forbes Top Next Gen Wealth Advisors 2020" id="bo-horizontal-center">
      </div>
    </div>

    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2020/06/Forbes2019.png" alt="Forbes 2019" class="bo-logo" id="bo-horizontal-center">
      </div>
    </div>

    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2020/08/Forbes2018.png" alt="Forbes 2018" class="bo-logo" id="bo-horizontal-center">
      </div>
    </div>

    <div class="card bg-primary" style="margin-bottom: 0px;">
      <div class="card-body text-center bo-vertical-center">
        <img src="https://brandywineoak.com/wp-content/uploads/2020/06/Forbes2017.png" alt="Forbes 2018" class="bo-logo" id="bo-horizontal-center">
      </div>
    </div>
    
  </div>

</div>
</div>
    
<?php 
  endwhile;
  get_footer();
?>

<style>
  img#AliAndMike {
      height: min(95vw, 485px);
      margin-top: 0.6rem;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 2.5rem;
  }
</style>

<script>
  var x = document.getElementById("video-content");

  function lightbox_open_custom() {
    document.getElementById("main-video").style.display = "block";
    x.play();
  }

  function lightbox_close_custom() {
    document.getElementById("main-video").style.display = "none";
    x.pause();
  }

  function textSlideshowAppear() {
    document.getElementById("textSlideshowOpacity").style.opacity = 1;
  }

  // Add image of Ali and Mike above paragraph on home page
  let p = document.querySelector('.disclosure p:first-of-type');
  let img = document.createElement('img');
  img.src = 'https://brandywineoak.com/wp-content/uploads/2022/07/Alison-and-Michael-Hi-Res-scaled.jpg';
  img.id = 'AliAndMike';
  let div = document.createElement('div');
  div.style.display = flex;
  p.before(div);
  div.append(img);

</script>