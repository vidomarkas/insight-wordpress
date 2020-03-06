<?php /* Template Name: news */ ?>


<?php get_header();?>

<header class="blog__header">
    <div class="blog__header__text">

        <h1 class="heading heading__primary--services underline underline--purple">News & Views</h1>
        <h3 class="heading heading__secondary--services">Stay on track with the latest insights, updates and
            research
            from the Catalyx team. From curious insights to actionable data, we've got something for you at all
            times.
        </h3>
    </div>
</header>

<main class="blog">

    <div class="blog__container">
        <?php query_posts( array()); ?>

        <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
        <div class="blog__post">

            <?php if(has_post_thumbnail()){ ?>
            <div class="blog__post__image__wrapper"
                style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID());?>')">

            </div>
            <?php }?>
            <h2 class="blog__post__title"><?php the_title(); ?></h2>
            <div class="blog__post__excerpt">
                <?php the_excerpt();?>
            </div>
        </div>
        <hr>
        <?php endwhile; ?>

        <?php else : ?>

        <p><?php __('No News'); ?></p>

        <?php endif; ?>
    </div>
    </div>
</main>
<?php get_footer();?>