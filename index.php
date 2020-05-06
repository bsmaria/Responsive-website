<?php get_header(); ?>

</header>

<main>
  <section>
    <a href="<?php echo site_url("/blog"); ?>">
      <h1 class="section-header">PortFolio</h1>
    </a>   
        <a href="#">
          <?php echo get_the_category_list(", "); ?>
        </a>     
  </section>
  <section class="two-columns-section" id="features-columns">
              
              <?php
                  while (have_posts()) {
                    the_post();
                  
            ?>
                  <div class="features-item">
                      <a href="<?php the_permalink(); ?>">
                      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                      </a>
                      <h3>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h3>
                      <div class="metadata">
                        <p>Posted by <?php the_author(); ?> on <?php the_time("F j, y"); ?> in <a href="#"><?php echo get_the_category_list(", "); ?></a></p>
                      </div>
                      <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                      <a href="<?php the_permalink();?>" ><button type="button" class="read-more-btn">Read More</button></a>
                  </div>
                <?php } ?>
                  <?php
                    wp_reset_query();             
                  ?>  
  </section>
    <div class="pagination">
      <?php echo paginate_links(); ?>
    </div>
</main>
<?php get_footer(); ?>