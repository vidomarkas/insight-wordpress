<?php get_header();?>

<?php

if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<div class="project-header__background "
    style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID());?>')">
    <div class="project-header__background__overlay"></div>
</div>
<main class="project-main">
    <div class="project-main__container">

        <header class="project-header">
            <h2 class="heading heading--white heading__primary underline underline--purple"><?php the_title();?></h2>
            <p class="heading heading--white heading__secondary"><?php echo wp_trim_words(get_the_excerpt(), 30) ;?></p>
        </header>
        <div class="project-content">
            <?php the_content();?>
        </div>




        <div class="success-stories__pagination">
            <?php echo paginate_links(); ?></div>
    </div>



</main>
<?php
endwhile;

endif;
?>

<?php get_footer();?>