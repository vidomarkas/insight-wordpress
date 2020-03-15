<?php /* Template Name: contact */ ?>

<?php get_header();?>
<div class="contact">

    <header id="contact-header" class="header-fixed">
        <div class="about__header ">
            <div class="about__header__container space-between">
                <div class="about__header__person">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/intro-with-people--green-coat.png" alt="">
                </div>
                <div class="about__header__person about__header__person--right">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/intro-with-people--hand-in-pockets.png"
                        alt="">
                </div>
            </div>
        </div>
    </header>

    <div class="main-content">
        <div class="about__header__text">
            <h1 class="heading heading__primary--contact ">Want to build your very own CROWD?
            </h1>
            <h2 class="heading heading__primary--contact underline underline--purple">Start here...</h2>
        </div>

        <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1" html_class="contact-form"]' ); ?>

    </div>
</div>
<div class="testimonial testimonial-fullwidth">
<div class="contact-testimonial__container">

    <p class="heading heading__primary--contact contact-testimonial__text" >Access consumers when you need them, the way you
        need them, to build
        brands that beat their
        expectations.</p>
</div>
</div>




<?php get_footer();?>