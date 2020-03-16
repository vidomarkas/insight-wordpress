<?php get_header();?>

<main class="success-stories__container">
    <header>
        <h2 class="heading heading__secondary underline underline--purple">Search results for
            <?php echo get_search_query();?></h2>
    </header>

    <div class="search-results">
        <?php if(have_posts()){ ?>


        <?php
        while( have_posts()){
            the_post();
    ?>

        <div class="result" <?php if(get_post_type() == 'project'){?> style="background-color: #eee" <?php }?>>
            <div class="result-image">
                <div class="result-image__background"
                    style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID());?>)">


                </div>
            </div>

            <div class="result-description">
                <a href="<?php  the_permalink();?>">
                    <h3 class="result-title"><?php  the_title();?></h3>
                </a>
                <div class="card-meta">
                    <?php if(get_post_type() == 'post'){?>
                    Posted on <?php the_time('F j, Y');?>
                    <?php }?>
                </div>
                <p><?php echo wp_trim_words(get_the_excerpt(), 30) ;?></p>
                <a href="<?php  the_permalink();?>" class="btn btn-readmore">Read more</a>
            </div>
        </div>


        <?php } wp_reset_query(); ?>



        <?php } else {?>
        <div class="no-results">
            <h2><?php  echo 'No results found';?></h2>
        </div>
        <?php }?>

    </div>



    <div class="success-stories__pagination">
        <?php echo paginate_links(); ?></div>


</main>


<?php get_footer();?>