<?php get_header(); ?>
<!-- start Clients -->
<?php   
$args = array(
    'post_type' => 'clients',   
    'order' => 'ASC',   
    'posts_per_page' => 1,   
);
$loop = new WP_Query($args);
if ($loop->have_posts()) {
    ?>
<div class="clearfix">
    <div class="single-clients">
    <div class="container">
    <h2 class="special-heading">Clients</h2>
    <span></span>
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="contact">
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
            <a href="" class="imags">
                <img class="img-clients" src="http://localhost/AboEissa/wp-content/themes/aboeissa/imag/Clients.jpg" alt="" />
                <img class="img-clients" src="http://localhost/AboEissa/wp-content/themes/aboeissa/imag/Clients1.jpg" alt="" />
                <img class="img-clients" src="http://localhost/AboEissa/wp-content/themes/aboeissa/imag/Clients2.jpg" alt="" />
                <img class="img-clients" src="http://localhost/AboEissa/wp-content/themes/aboeissa/imag/Clients3.jpg" alt="" />
            
            </a> 
        </div>
	<?php endwhile; ?>
    </div>
    </div>
</div>
<?php }
    wp_reset_postdata(); ?>
<!-- End Clients -->


<?php get_footer(); ?>