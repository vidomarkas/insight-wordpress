<section class="homepage-section">
    <header>
        <h2 class="heading heading__secondary underline underline--purple">Explore our success stories</h2>
    </header>
    <div class="projects-container">
        <?php
        $args = array('post_type'=> 'project',
        'posts_per_page' => 2);
        $projects = new WP_Query($args);
        while($projects-> have_posts()){
            $projects-> the_post();
    ?>

        <div class="project">

            <h4 class="project__title"><?php the_title();?></h4>
            <a href="<?php  the_permalink();?>">
                <div class="project__background"
                    style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID());?>')">

                    <div class="overlay">
                        <p><?php echo wp_trim_words(get_the_excerpt(), 30) ;?></p>
                    </div>
                </div>
            </a>
        </div>



        <?php } wp_reset_query(); ?>

    </div>
    <div class="testimonial">
        <i class="fas fa-quote-right testimonial__icon"></i>
        <p class="testimonial__text">“Catalyx has established a contemporary way to evaluate all of the information
            at its fingertips which
            gives us hope for the future. In a world where data is proliferating at an astonishing rate, there will
            be ways to address issues posed by this sheer volume of data thanks to emerging talents like Catalyx ”
        </p>
        <br>
        <p class="testimonial__author">MRS Judging Panel</p>

    </div>
</section>