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
            <h1 class="heading heading__primary--about ">Want to build your very own CROWD?
            </h1>
            <h2 class="heading heading__primary--about underline underline--purple">Start here...</h2>
        </div>
        <form action="" class="contact-form">
            <p>Please complete the form below. Information with an asterisk* is required.</p>
            <div class="contact-form__section">
                <h4 class="form__heading">My personal details</h4>


                <label class="contact-form__field">
                    <input type="text" placeholder="First name" name="">

                </label>


                <label class="contact-form__field">
                    <input type="text" placeholder="Last name" name="">

                </label>


                <label class="contact-form__field">
                    <input type="email" placeholder="Email address*" name="" required="">

                </label>

            </div>
            <hr>
        </form>
    </div>
</div>
<div class="testimonial testimonial-fullwidth">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum eligendi, minus praesentium eum similique
        voluptates a blanditiis fugit autem rem saepe eaque cupiditate, quisquam dignissimos voluptas temporibus tempora
        laboriosam cumque!</p>
</div>




<?php get_footer();?>