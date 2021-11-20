<?php get_header(); ?>
<!-- start portfolio -->
<?php   
$args = array(
    'post_type' => 'portfolio',   
    'order' => 'ASC',   
    'posts_per_page' => 3 ,   
);
$loop = new WP_Query($args);
if ($loop->have_posts()) {
    ?>
<div class="clearfix">
    <div class="single-portfolio">
        <div class="container">
            <div class="row">
            <h2 class="special-heading">Portfolio</h2>
            <span></span>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="lock text-cenetr col-lg-12 col-md-12 col-sm-12 col-xs-12 edit-col-serv">
                <div class="contact">
                    <h5><?php the_title(); ?></h5>
                    <?php the_post_thumbnail('full', array('class' => 'card-img')); ?>
                        <p class="paragraph-portfolio"><?php the_content(); ?></p>
                        <a href="https://facebook.com/" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php }
    wp_reset_postdata(); ?>
<!-- End portfolio -->


<?php get_footer(); ?>