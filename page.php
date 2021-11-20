
<?php get_header();?>
<!-- Start Landing Section -->
    <div class="single-pages">
        <div class="container">
        <div class="about text-cenetr col-lg-12 col-md-12 col-sm-12 col-xs-12 edit-col-serv">
            <?php query_posts('page_id=31&action'); if (have_posts()) :  while (have_posts()) : the_post(); ?>
                <h4><?php the_title(); ?></h4>
                <span></span>
                <p><?php the_excerpt(); ?> </p>
                <?php endwhile;   else : endif;   wp_reset_query(); ?>
            </div>
            <div class="about text-cenetr col-lg-12 col-md-12 col-sm-12 col-xs-12 edit-col-serv">
                <div class="contact">
                    <h4>CONTACT US</h4>
                    <span></span>
                    <form action="">
                        <label class="email" for="email">EMAIL</label>
                        <input class="input" type="email" id="email" placeholder="Email or phone number">
                        <br>
                        <label class="message" for="textarea">MESSAGE</label>
                        <textarea class="input" id="textarea" rows="2" placeholder="Sending a Message"></textarea>
                        <br>
                        <input class="send" type="submit" value="SEND" href="#" >
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- End Landing Section -->

<?php get_footer();?>