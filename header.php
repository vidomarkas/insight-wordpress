<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/386d3b000f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <?php wp_head(); ?>
</head>

<body>
    <div id="slideout-menu" class="nav-mobile">
        <ul>
            <li><a <?php if(is_front_page()) echo 'class="active"' ?> href="<?php echo site_url();?>">Home</a></li>
            <li><a <?php if(get_post_type() == 'post') echo 'class="active"' ?>
                    href="<?php echo site_url('/blog');?>">Blog</a></li>
            <li><a <?php if(get_post_type() == 'project') echo 'class="active"' ?>
                    href="<?php echo site_url('/projects');?>">News & Views</a></li>
            <li><a <?php if(is_page('about') ) echo 'class="active"' ?>
                    href="<?php echo site_url('/about');?>">About</a></li>
            <li><a <?php if(is_page('contact') ) echo 'class="active"' ?>
                    href="<?php echo site_url('/contact');?>">Contact</a></li>
            <div class="searchbox-slide-menu">
                <?php get_search_form();?>
            </div>
        </ul>
    </div>

    <nav class="nav">
        <div class="nav__logo-container"><a href="<?php echo site_url();?>"><img class="nav__logo"
                    src="<?php echo get_template_directory_uri(); ?>/img/spa.png" alt="logo" /></a></div>

        <ul class="nav__links">
            <li class="nav__link"><a <?php if(is_front_page()) echo 'class="active"' ?>
                    href="<?php echo site_url();?>">Home</a></li>
            <li class="nav__link"><a <?php if(get_post_type() == 'post') echo 'class="active"' ?>
                    href="<?php echo site_url('/blog');?>">News & Views</a></li>
            <li class="nav__link"><a <?php if(get_post_type() == 'project') echo 'class="active"' ?>
                    href="<?php echo site_url('/projects');?>">Projects</a></li>
            <li class="nav__link"><a <?php if(is_page('about')) echo 'class="active"' ?>
                    href="<?php echo site_url('/about');?>">About</a>
            </li>
            <li class="nav__link"><a <?php if(is_page('contact')) echo 'class="active"' ?>
                    href="<?php echo site_url('/contact');?>">Contact</a>
            </li>

            <li class="nav__link"><a href="#" id="search-icon">
                    <i class="fas fa-search"></i></a></li>
        </ul>
        <div id="menu-icon" class="nav__burger-icon">
            <!-- prettier-ignore -->
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                <path d="M0 0h24v24H0z" fill="none" />
                <path fill="#eeeeee" d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
            </svg>
        </div>
    </nav>

    <div id="searchbox" class="searchbox">
        <?php get_search_form();?>
    </div>