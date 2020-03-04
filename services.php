<?php /* Template Name: services */ ?>


<?php get_header();?>


<main class="services">
    <div class="services-header">
        <h1 class="heading heading__primary--services">We help you to build stronger brands<br>
            that beat consumer expectations again and again...</h1>
        <h3 class="heading heading__secondary--services">...by embedding consumers deep into your innovation and
            creative
            development processes.</h3>
    </div>
    <div id="services-nav" class="services-navigation">
        <ul class="services-navigation__list">
            <li class="services-navigation__item activeSection"><a href="#insight-discovery"
                    class="services-navigation__item__link">Insight
                    discovery</a></li>
            <li class="services-navigation__item"><a href="#innovation-development"
                    class="services-navigation__item__link">Innovation development</a></li>
            <li class="services-navigation__item"><a href="#communication-development"
                    class="services-navigation__item__link">Communication development</a>
            </li>
            <li class="services-navigation__item"><a href="#commercial-optimisation"
                    class="services-navigation__item__link">Commercial Optimisation</a></li>
        </ul>
    </div>
    <div class="services-section__container">
        <section class="services-section " id="insight-discovery">
            <div class="services-section__wrapper">
                <div class="services-text__wrapper">
                    <h3 class="services__heading--purple">Insight discovery</h3>
                    <h2 class="services__heading">Map your territory and understand your consumers' unmet needs and jobs
                        to
                        be done</h2>
                    <p class="services__text">
                        Tap into consumers at source and uncover valuable insights into how they behave, shop, choose,
                        use
                        and evaluate. Bridge the gap between your offer and their needs. What do they want from your
                        products, brands or services? Are you meeting their needs? How can you exceed them?
                    </p>
                </div>
                <div class="services__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services-1.png" alt="">
                </div>
            </div>
        </section>
        <section class="services-section" id="innovation-development">
            <div class="services-section__wrapper services-section__wrapper--reverse">
                <div class="services-text__wrapper">
                    <h3 class="services__heading--purple">Innovation development</h3>
                    <h2 class="services__heading">Build creative ideas and relevant innovation that compel consumers to
                        reach for their wallets</h2>
                    <p class="services__text">
                        Tap into your consumers' little grey cells and inject their brain power into your innovation
                        process. Mine their insight and imagination for inspiring ideas that feed your innovation
                        pipeline. Collaborate with them to co-create names, claims, communications and packaging.
                    </p>
                </div>
                <div class="services__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services-2.png" alt="">
                </div>
            </div>
        </section>
        <section class="services-section" id="communication-development">
            <div class="services-section__wrapper services-section__wrapper">
                <div class="services-text__wrapper">
                    <h3 class="services__heading--purple">Communication development</h3>
                    <h2 class="services__heading">Develop compelling propositions and communications for your brand that
                        consumers find irresistible.</h2>
                    <p class="services__text">
                        Is the communication around your product, service effective? Rigour-test ideas, concepts and
                        propositions with consumers, then refine using consumer-led iteration, in real-time and at
                        scale, to make sure they’re compelling.
                    </p>
                </div>
                <div class="services__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services-3.png" alt="">
                </div>
            </div>
        </section>
        <section class="services-section" id="commercial-optimisation">
            <div class="services-section__wrapper services-section__wrapper--reverse">
                <div class="services-text__wrapper">
                    <h3 class="services__heading--purple">Commercial Optimisation</h3>
                    <h2 class="services__heading">Use the crowd to help design, assess and refine the ideal launch and
                        path to purchase.</h2>
                    <p class="services__text">
                        Is your physical or online retail experience optimised? Whether you are interested in
                        understanding your consumer omnichannel path to purchase, need general eCommerce insight &
                        optimisation or are looking for the most real-life way of testing the eCommerce experience
                        Commercial Optimisation gives you all you need to build more successful brands online.
                    </p>
                </div>
                <div class="services__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services-4.png" alt="">
                </div>
            </div>
        </section>
    </div>

    <?php include 'section-success-stories.php'?>
    <div class="services-contact__banner">
        <h4><a href="<?php echo get_template_directory_uri(); ?>/contact">Got a project in mind?<br>
                We’d love to hear from you.</a></h4>
    </div>
</main>
<?php get_footer();?>