<?php get_header();

while(have_posts()){
    the_post();

?>

<div class="container">
    <h2 class="page-heading"><?php the_title();?></h2>
    <div id="post-container">
        <section id="blogpost">
            <div class="card">
                <?php if(has_post_thumbnail()){?>
                <div class="card-image">
                    <img alt="card Image" src="<?php echo get_the_post_thumbnail(get_the_ID()); ?>" </div>
                    <?php }?>
                    <div class="card-description">
                        <?php the_content();?>
                    </div>
                </div>
        </section>

        <?php }?>
        <aside id="sidebar">
            <?php dynamic_sidebar('main_sidebar')?>
        </aside>
    </div>
</div>
</div>


<?php get_footer(); ?>