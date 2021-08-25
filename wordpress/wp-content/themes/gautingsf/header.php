<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300&display=swap" rel="stylesheet">       
        <script src="https://kit.fontawesome.com/62d63214bd.js" crossorigin="anonymous"></script>
        
        <?php wp_head(); ?>

    </head>
    <body>
        <header>
            <div id="header_content">
                <a class="mobile-nav">
                    <i class="fa fa-bars"></i>
                </a>
                <h1><?php bloginfo('name'); ?></h1>
                <h3><?php bloginfo('description'); ?></h3>
                <?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
            </div>
        </header>

