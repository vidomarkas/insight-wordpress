<?php get_header();?>



<main class="success-stories__container">



    <header>
        <h2 class="heading heading__secondary underline underline--purple">Success stories</h2>
    </header>



    <div class="projects-container__success-stories">
        <?php
        $args = array('post_type'=> 'project');
        $projects = new WP_Query($args);
        while($projects-> have_posts()){
           
            $projects-> the_post();
    ?>

        <div class="project project__success-stories">

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

    <div class="success-stories__pagination">
        <?php echo paginate_links(); ?></div>


</main>
<?php get_footer();?>