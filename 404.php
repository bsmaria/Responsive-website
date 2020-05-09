<?php get_header(); ?>
    <div class="container-404">
    <div class="404-header">
        <h2>This is the 404 error page. How' you doing?</h2>
    </div>
    <ul>
        <li><a href="<?php echo site_url('')?>">Home Page</a></li>
        <li><a href="<?php echo site_url('/blog')?>">Projects</a></li>
        <li><a href="<?php echo site_url('/about')?>">About us</a></li>
    </ul>
</div>  
<?php get_footer(); ?>