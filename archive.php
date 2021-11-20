<?php get_header(); ?>
<!-- start services -->
<?php   
$args = array(
    'post_type' => 'services',   
    'order' => 'ASC',   
    'posts_per_page' => 3,   
);
$loop = new WP_Query($args);
if ($loop->have_posts()) {
    ?>
<div class="clearfix">
    <div class="single-services">
        <div class="container">
            <h2 class="special-heading">services</h2>
            <span></span>
			<?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="feat">
                <?php the_post_thumbnail('full', array('class' => 'img-services')); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?> </p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php }
    wp_reset_postdata(); ?>
<!-- End services -->
<?php get_footer(); ?>