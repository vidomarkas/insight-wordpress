<?php get_header();?>

<?php while(have_posts()){
    the_post();

    ?>

<div class="project-header__background post-header__background " style="background-color:#EDF6FA;">
    <header class="post-header">
        <h2 class="heading heading heading__primary underline underline--purple"><?php the_title();?></h2>

    </header>
</div>
<main class="project-main">



    <?php }?>
    <div class="project-main__container">


        <div class="content">

            <aside id="sidebar" class="post-sidebar">
                <?php dynamic_sidebar('main_sidebar');?>
            </aside>
            <div class="project-content post-content">
                <div class="post-image"
                    style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID());?>')">

                </div>
                <p id="post-meta">Posted by <?php the_author(); ?> on
                    <?php the_time('F j, Y');?>
                    <?php if(get_post_type() == 'post'){?></p>
                <?php the_content();?>
            </div>
        </div>
</main>

<?php
}
 ?>
<hr>
<h2>Related posts</h2>
<?php
// Default arguments
$args = array(
	'posts_per_page' => 4, // How many items to display
	'post__not_in'   => array( get_the_ID() ), // Exclude current post
	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
);

// Check for current post category and add tax_query to the query arguments
$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
$cats_ids = array();  
foreach( $cats as $wpex_related_cat ) {
	$cats_ids[] = $wpex_related_cat->term_id; 
}
if ( ! empty( $cats_ids ) ) {
	$args['category__in'] = $cats_ids;
}

// Query posts
$wpex_query = new wp_query( $args );

// Loop through posts
foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>

<a href="<?php the_permalink(); ?>"
    title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a>

<?php
// End loop
endforeach;

// Reset post data
wp_reset_postdata(); ?>

<?php get_footer(); ?>