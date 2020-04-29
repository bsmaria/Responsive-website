<?php get_header(); ?>

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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
          </li>
          <li class="pages-inline">
                <div class="page-item">
                    <div class="page-icon" id="icon2">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/page-icon-03.png" alt="fully customizable icon." />
                    </div>
                    <span>FULLY CUSTOMIZABLE</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
          </li>
          <li class="pages-inline">
              <div class="page-item">
                <div class="page-icon" id="icon3">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page-icon-04.png" alt="work and work icon." />
                </div>
                <span>WORK AND WORK</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
        
            <div class="galery-align">

            <?php 
                $args = array(
                  "post_type" => "post",
                  "posts_per_page" => 8,
                );

                $blogposts = new WP_Query($args);

                while ($blogposts->have_posts()) {
                  $blogposts->the_post();
                }
           ?>
                <div class="sizezero">
                    <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                    </a>
                </div>
               
                <?php
                  wp_reset_query();             
                ?>  
                      
            </div>         
        </div>
      </div>
    </section>

    <section>
        <div id="services">
          <div class="services-text">
            <span><a href="<?php echo site_url('/services'); ?>">Our services</a></span>
          </div>
          <div class="flex-box">
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
        </div>
  </section>

  <section id="contact">
    <div class="contact-form">
      <div class="comment-text">
        <h2>Leave us comment!</h2>
      </div>
      <div id="myform">
        <form action="submit">
          <label for="name">Name:</label><br>
          <input type="text" placeholder="Ex: John" name="name" value="" required></br>
          <label for="emnail">Email</label><br>
          <input type="email" placeholder="Ex: xxxxx@mail.com" value="@" name="email" required><br>
          <label for="textarea">Your message here:</label><br>
          <textarea type="text" placeholder="Write your message." minlength="20" maxlength="340" name="textarea"></textarea><br>
          <button type="submit" id="submit-btn" name="submit" value="submit">SUBMIT</button>
        </form>
      </div>
    </div>
  </section>

<?php get_footer(); ?>