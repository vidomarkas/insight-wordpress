<?php get_header();?>

<?php while(have_posts()){
    the_post();

    ?>

<div class="project-header__background post-header__background " style="background-color:#EDF6FA;">
    <header class="post-header">
        <h2 class="heading heading__primary underline underline--purple"><?php the_title();?></h2>

    </header>
</div>
<main class="post-main">



    <?php }?>
    <div class="post-main__container">


        <div class="content">

            <aside id="sidebar" class="post-sidebar">
                <?php dynamic_sidebar('main_sidebar');?>
            </aside>
            <div class="post-content">
                <div class="post-image"
                    style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID());?>')">

                </div>
                <p id="post-meta">Posted by <?php the_author(); ?> on
                    <?php the_time('F j, Y');?>
                    <?php if(get_post_type() == 'post'){?></p>
                <?php the_content();?>
                <?php echo "<a class='post-link' href=\"javascript:history.go(-1)\"> <i class='fas fa-angle-left'></i> Back to previous page</a>"; ?>
            </div>
        </div>
    </div>
</main>

<?php
}
 ?>

<?php get_footer(); ?>