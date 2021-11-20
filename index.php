<?php get_header(); ?>

<!-- strart landing section -->
<div class="landing">
<?php 
query_posts('page_id=20&action'); 
if (have_posts()) {
while (have_posts()) {
the_post(); ?>
    <div class="intro-text">
        <?php the_post_thumbnail('full', array('class' => 'intro-img')); ?>
        <span class="pargraph"><?php the_excerpt(); ?></span>
        <h1><?php the_title(); ?></h1>
        <div class="clearfix">
            <a href="<?php the_permalink(); ?>">PREVIEW</a>
            <a href="<?php the_permalink(); ?>">GET THEME</a>
        </div>
    </div>
    <?php
        }
    }
    
    ?>    
</div>
<!-- end landing section -->

<!-- start Article -->
<section class="Article" id="description">
<?php   
$args = array(
    'post_type' => 'description',
    'order' => 'ASC',   
    'posts_per_page' => 1,   
);
$loop = new WP_Query($args);
if ($loop->have_posts()) {
    ?>
    <div class="story">
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <span></span>
            <p class="Article-pargraph"> <?php the_excerpt(); ?></p>
        <?php endwhile; ?>
    </div>
<?php }
            wp_reset_postdata(); ?>
</section>
<!-- end Article -->

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
    <div class="card" id="portfolio">
        <div class="container">
            <div class="row">
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="lock text-cenetr col-lg-4 col-md-6 col-sm-12 col-xs-12 edit-col-serv">
                <div class="card bg-dark text-white">
                    <?php the_post_thumbnail('full', array('class' => 'card-img')); ?>
                    <div class="card-img-overlay contact">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="paragraph-portfolio"><?php the_excerpt(); ?></p>
                        <a href="https://facebook.com/" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php }
    wp_reset_postdata(); ?>
<!-- End portfolio -->

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
<div class="services" id="services">
        <div class="container">
			<?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="feat">
                <?php the_post_thumbnail('full', array('class' => 'img-services')); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?> </p>
            </div>
            <?php endwhile; ?>
        </div>
</div>
<?php }
    wp_reset_postdata(); ?>
<!-- End services -->

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
<div class="clients" id="clients">
    <div class="container">
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="contact">
            <h4><?php the_title(); ?></h4>
            <span></span>
            <p><?php the_excerpt(); ?></p>
            <a href="http://localhost/aboeissa/clients/" class="imags">
                <img src="<?php the_field('img'); ?>" class="img-clients" title="page img">
                <img src="<?php the_field('img1'); ?>" class="img-clients" title="page img">
                <img src="<?php the_field('img2'); ?>" class="img-clients" title="page img">
                <img src="<?php the_field('img3'); ?>" class="img-clients" title="page img">
            </a> 
        </div>
	<?php endwhile; ?>
    </div>
</div>
<?php }
    wp_reset_postdata(); ?>
<!-- End Clients -->

<!-- start about and contact -->
<div class="about-contact" >
    <div class="container">
        <div class="row">
            <div class="about text-cenetr col-lg-4 col-md-6 col-sm-12 col-xs-12 edit-col-serv">
            <?php query_posts('page_id=31&action'); if (have_posts()) :  while (have_posts()) : the_post(); ?>
                <h4><?php the_title(); ?></h4>
                <span></span>
                <p><?php the_excerpt(); ?> </p>
                <?php endwhile;   else : endif;   wp_reset_query(); ?>
            </div>
            <div class="about text-cenetr col-lg-4 col-md-6 col-sm-12 col-xs-12 edit-col-serv">
                <h4>CONTACT US</h4>
                <form action="">
                    <label class="email" for="email">EMAIL</label>
                    <br>
                    <input class="input" type="email" id="email" placeholder="Email or phone number">
                    <br>
                    <label class="message" for="textarea">MESSAGE</label>
                    <br>
                    <textarea class="input" id="textarea" rows="2" placeholder="Sending a Message"></textarea>
                    <br>
                    <input class="send" type="submit" value="SEND" href="#" >
                </form>
            </div>
        </div>
    </div>
</div>
<!-- start about and contact -->

<?php get_footer();?>