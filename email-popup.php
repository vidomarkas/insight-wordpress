<div class="email-popup-con">

    <div class="email-popup-inner-con">
        <div class="email-popup-img-con">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Email Subscribe Image">
            <div class="message-overlay-con">
                <span class="message">Join Our Mailing List</span>
                <span class="nothanks" id="nothanks">No Thanks</span>
            </div>
        </div>
        <?php echo do_shortcode( 'SHORTCODE FOR YOUR FORM HERE' ); ?>
    </div>

</div>