<?php get_header(); ?>

</header>

<main>
  <section>
    <a href="<?php echo site_url("/blog"); ?>">
      <h1 class="section-header">Search results for <?php echo get_search_query(); ?></h1>
    </a>          
  </section>
  <?php if(have_posts()) {?>
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
                        <p>Posted by <?php the_author(); ?> on <?php the_time("F j, y"); ?> 
                        
                        <?php if(get_post_type() == 'post') { ?>

                            in <a href="#"><?php echo get_the_category_list(", "); ?></a></p>
                            
                            <?php } ?>                   
                        
                      </div>
                      <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                      <a href="<?php the_permalink();?>" ><button type="button" class="read-more-btn">Read More</button></a>
                  </div>
                <?php } 
                 wp_reset_query();             
                  ?>              
  </section>
        <?php } else {?>

            <div class="no-results">
                <h2>There's nothing to se here :c Did you mistype anything?</h2>
                <h3>Check out the following links</h3>
                <ul>
                    <li><a href="<?php echo site_url("")?>">Home page</a></li>
                    <li><a href="<?php echo site_url("/blog")?>">Projects</a></li>
                    <li><a href="<?php echo site_url("/about")?>">About us</a></li>
                </ul>
            </div>
            
          <?php  }?>
    <div class="pagination">
      <?php echo paginate_links(); ?>
    </div>
</main>
<?php get_footer(); ?>