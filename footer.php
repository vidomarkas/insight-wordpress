<footer class="footer">
    <div class="footer__container">

        <div class="footer__section">
            <h3 class="footer__heading">Contact us</h3>
            <p class="footer__text">Interested in working together?
                Get in touch and let’s talk.</p>
            <a href="#" class="footer__btn">
                Contact us
            </a>

        </div>
        <div class="footer__section">
            <h3 class="footer__heading">Stay connected</h3>
            <p class="footer__text">Subscribe to receive insights, updates
                and research from the Catalyx team.</p>
            <a href="#" class="footer__btn">
                Sign up
            </a>
        </div>
        <div class="footer__section">
            <h3 class="footer__heading">Follow us</h3>
            <p class="footer__text">Stay up to date with our social media</p>
            <ul class="footer__media">
                <li class="footer__media__icon"><a href="#"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a></li>
                <li class="footer__media__icon"><a href="#"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt=""></a></li>
                <li class="footer__media__icon"><a href="#"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt=""></a></li>
            </ul>
        </div>


    </div>
    <div class="footer__nav">
        <ul class="footer__nav__list">
            <li><a class="footer__text" href="<?php echo site_url();?>">Home</a></li>
            <li><a class="footer__text" href="<?php echo site_url('/about');?>">About</a></li>
            <li><a class="footer__text" href="<?php echo site_url('/privacy-policy');?>">Privacy Policy</a></li>
            <li><a class="footer__text" href="<?php echo site_url('/blog');?>">Blogs</a></li>
            <li><a class="footer__text" href="<?php echo site_url('/projects');?>">Projects</a></li>
            <li><a class="footer__text" href="<?php echo site_url('/contact');?>">Contacts</a></li>
        </ul>
    </div>
    <div class="footer__credentials">
        <p>© 2020 Catalyx. All rights reserved. Terms & conditions</p>
    </div>


</footer>
<?php  wp_footer(); ?>
<!-- <script src="/js/main.js"></script> -->
</body>

</html>