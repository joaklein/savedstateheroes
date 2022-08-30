<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png">
    <!-- Primary Meta Tags -->
    <title>Saved State Heroes</title>
    <meta name="title" content="Saved State Heroes">
    <meta name="description" content="">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://savedstateheroes.com/">
    <meta property="og:title" content="Saved State Heroes">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/sshThumb.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://savedstateheroes.com/">
    <meta property="twitter:title" content="Saved State Heroes">
    <meta property="twitter:description" content="">
    <meta property="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/images/sshThumb.png">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <h1 class="ssh-header-1">Saved State</h1>
        <h1 class="ssh-header-2">Heroes</h1>
        <!-- <h4>motto n shit</h4> -->
    </header>

    <nav>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/ssh-logo.png" alt="SSH Logo" class="ssh-nav-logo">

        <div class="pages-mobile">
            <a href="#" class="burger"><i class="fas fa-bars"></i></a>
        </div>

        <ul class="pages">
            <li><a href="/home">Home</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/episodes">Episodes</a></li>
            <li><a href="/about">About</a></li>
        </ul>

        <ul class="socials">
            <li><a href="<?php echo carbon_get_theme_option('discord_link'); ?>" target="_blank"><i class="fab fa-discord"></i></a></li>
            <li><a href="<?php echo carbon_get_theme_option('youtube_link'); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
            <li><a href="<?php echo carbon_get_theme_option('twitter_link'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </nav>