<!doctype html>
<!--[if lte IE 9 ]><html class="browser-not-compatible"><![endif]-->
<!--[if (gt IE 9)|!(IE) ]><html><![endif]-->
<head>

	<title><? wp_title( '|', true, 'right' ); ?></title>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="Content-Language" content="fr_FR" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

    <link rel="icon" href="<?= get_stylesheet_directory_uri() ?>/assets/images/favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="<?= get_stylesheet_directory_uri() ?>/assets/images/favicon-192x192.png">

    <meta name="google-site-verification" content="" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="<?= get_stylesheet_directory_uri() ?>/app.css<%= killCache %>" rel="stylesheet" />


    <script>
        var template_dir = "<?= get_stylesheet_directory_uri() ?>";
        var site_url = "<?= site_url() ?>";
    </script>

    <? 
    global $post, $parent;
    wp_head();
    ?>
</head>

<body <? body_class() ?>>
    
    <!-- <div class="loading">
        <img class="loading-logo" src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo-loader.svg">
    </div> -->

    <header class="header">
        <a href='<?= site_url() ?>' class="header-logo">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo.jpg">
        </a>

        <div class="header-side">
            <div class="header-side-main"><?= get_field('header_side_main', 'option') ?></div>
            <div class="header-side-secondary"><?= get_field('header_side_secondary', 'option') ?></div>
        </div>
    </header>

    <main>