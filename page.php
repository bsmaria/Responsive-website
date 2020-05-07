<?php get_header(); 

while(have_posts()) {
    the_post();

?>
</header>
    
<main>
    <section class="section-header">
        <h2><?php the_title(); ?> US</h2>
        <a href="<?php echo site_url("") ?>"><h4>&#60 &#60 Return</h4></a>
    </section>

    <section>
        <div class="main-post" id="featured-post">
            <?php if(has_post_thumbnail()) {?>
            <div class="post-image">
                <a href="#"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="About image"></a>
            </div>
            <?php  }?>
            <div class="post-description">
                <?php the_content(); ?>
            </div>
        </div>
        <aside id="sidebar">
            <h3>Side heading</h3>
        </aside>
    </section>
    <?php  }?>
    <section>
    <div class="division">
        <a href="#home" class="up-btn"><h4>UP</h4></a>
    </div>
    </section>

</main>
    
<?php get_footer(); ?>