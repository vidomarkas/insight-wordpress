<footer>
    <div class="container">
        <div class="footer-container">
            <div id="left-footer">
                <h3>Quick links</h3>
                <ul>
                    <li><a href="<?php echo site_url();?>">Home</a></li>
                    <li><a href="<?php echo site_url('/about');?>">About</a></li>
                    <li><a href="<?php echo site_url('/privacy-policy');?>">Privacy Policy</a></li>
                    <li><a href="<?php echo site_url('/blog');?>">Blogs</a></li>
                    <li><a href="<?php echo site_url('/projects');?>">Projects</a></li>
                    <li><a href="<?php echo site_url('/contact');?>">Contacts</a></li>
                </ul>
            </div>
            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="#"><img src="/images/facebook.png" alt="" /> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/github.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/youtube.png" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center; border-top:  1px solid #2a2a2a;">
        <p>This website is developed by GTCoding</p>
    </div>
</footer>
<?php  wp_footer(); ?>
<script src="/js/main.js"></script>
</body>

</html>