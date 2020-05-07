<?php get_header(); 

while(have_posts()) {
    the_post();

?>

<main id="mainp">    
<section>
<h2 class="section-header"><?php the_title(); ?></h2>
</section>
    <div class="post-info">
        <div class="metadata">
         <p>Posted by <?php the_author(); ?> on <?php the_time("F j, y"); ?> 
         <?php if(get_post_type() == 'post'){?>
         in <a href="#"><?php echo get_the_category_list(", "); ?></a></p>
         <?php }?>
        </div>
    </div>

    <section>    
        <div class="main-post" id="featured-post">
            <div class="post-image">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                </a>
            </div>
            <div class="post-description">
            <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
            <section>
            <div id="comment-section">
            <?php 
            
            $fields =  array(

                'author' =>
                   '<input placeholder="Name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                  '" size="30"' . $aria_req . ' />',
              
                'email' =>                  
                  '<input placeholder="Email" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                  '" size="30"' . $aria_req . ' />'
                          
              );
            
              $args = array(
                'title_reply' => 'Share what you think',
                'fields' => $fields,
                'comment_field' => '<textarea placeholder="Your comment" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
                '</textarea>',
                'comments_note_before' => '<p class="comment-notes">Your email address will not be published. All fields are required</p>'
              );

            comment_form($args); 
            
            $comments_number = get_comments_number( );
            if($comments_number != 0) {
                ?>
                <div class="comments">
                    <h3>What others Say</h3>
                    <ol class="all-comments">
                        <?php
                        $comments = get_comments(array(
                            "post_id" => $post->ID,
                            "status" => "approve"
                        ));
                        wp_list_comments(array(
                            "per_page" => 15                
                        ), $comments);
                        ?>
                    </ol>
                </div>
                <?php 
                ?>
                <?php
            }
            ?>
            </div>
        </section>
        </div>
        
            <?php }?>

        <aside id="sidebar">
        <?php dynamic_sidebar('main_sidebar');?>
        </aside>
        </section>
        
  

</main>
 


  <section>
    <div class="other-posts">
        <?php 
         $args = array(
            "post_type" => "post",
            "posts_per_page" => 4
          );

          $blogposts = new WP_Query($args);

          while ($blogposts->have_posts()) {
            $blogposts->the_post();

        
        ?>    
      <div class="more-features">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title();?>">
          </a>
            <h3><?php the_title(); ?></h3>        
         <a href="<?php the_permalink(); ?>"><button class="read-more-btn">Read more</button></a>
        
       </div>       
        <?php } ?>
    </div>
  </section>

  </main>

<?php get_footer(); ?>