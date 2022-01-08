<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<?php

    if( is_front_page() ):
        $wpsgt_class = array ( 'wpsgt-class', 'my-class' );
    else:
        $wpsgt_class = array ( 'no-wpsgt-class' );
    endif;

?>

<body <?php body_class($wpsgt_class); ?>>

    <div class="align-center">
        <div class="logo">
            <?php if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            } ?>
        </div>
    </div>
    <div class="menuMobile">
        <a onclick="menuMobile()"><img src="<?php get_template_directory_uri(); ?>/ortobio-broggini/wp-content/themes/OrtobioBrogginiCustomTheme/img/bars-solid.svg" class="clickMenuMobile" /></a>
    </div>

    <div id="menuObct">
        <?php wp_nav_menu(array(
            'theme_location'=>'primary')); ?>
    </div>

    <div class="container">