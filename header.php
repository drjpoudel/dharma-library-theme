<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
        <nav class="main-navigation">
            <?php wp_nav_menu(['theme_location' => 'primary']); ?>
        </nav>
    </div>
</header>
