<?php get_header(); ?>
</header>

<div class="h1-title">
  <div class="title-text" id="home-title-text">
    <span>Here you can type your company slogan</span>
  </div>
</div>

</header>
<main>
  <section>
    <div id="pages">
      <div class="pages-text">
        <a href="<?php echo site_url('/about'); ?>">
          <span>OUR GOALS</span>
        </a>
      </div>
      <ul>
        <li class="pages-inline">
          <div class="page-item">
            <div class="page-icon" id="icon1">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-icon-02.png" alt="Research icon." />
            </div>
            <span>RESEARCH</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
        </li>
        <li class="pages-inline">
          <div class="page-item">
            <div class="page-icon" id="icon2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-icon-03.png"
                alt="fully customizable icon." />
            </div>
            <span>FULLY CUSTOMIZABLE</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
        </li>
        <li class="pages-inline">
          <div class="page-item">
            <div class="page-icon" id="icon3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-icon-04.png" alt="work and work icon." />
            </div>
            <span>WORK AND WORK</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div id="features">
      <div id="container">
        <div class="featured-text">
          <span><a href="<?php echo site_url('/blog'); ?>">FEATURED WORKS</a></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat</p>
        </div>

        <div class="galery-align">

          <?php 
                $args = array(
                  "post_type" => "post",
                  "posts_per_page" => 4
                );

                $blogposts = new WP_Query($args);
            ?>
          <?php
                while ($blogposts->have_posts()) {
                  $blogposts->the_post();                
           ?>
          <div class="sizezero">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
            </a>
          </div>
          <?php } ?>
          <?php
                  wp_reset_query();             
                ?>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div id="services">
        <div class="services-items">
          <div class="circle-image"><i class="fas fa-image"></i></div>
          <span class="stext">Branding</span>
        </div>
        <div class="services-items">
          <div class="circle-image"><i class="fas fa-play"></i></div>
          <span class="stext">Motion Graphics</span>
        </div>
        <div class="services-items">
          <div class="circle-image"><i class="fas fa-laptop"></i></div>
          <span class="stext">Web Design</span>
        </div>
        <div class="services-items">
          <div class="circle-image"><i class="fas fa-paint-brush"></i></div>
          <span class="stext">Illustration</span>
        </div>
      </div>
  </section>

  <section id="contact">
    <div class="contact-form">
      <div class="comment-text">
        <h2>Leave us a comment!</h2>
      </div>
      <div id="myform">
                  <?php the_content();?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>