<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Biberstain
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header class="header">
        <a href="<?= !is_front_page() ? get_home_url() : 'javascript:void(0);' ?>" class="header__logo">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/log_blue.svg" alt="Biberstein">
        </a>

        <?php
            if( get_field('search_link', 'options') ) {
        ?>
        <div class="header__left">
            <?php echo( get_field('search_link', 'options') ? '<a href="'. get_field('search_link', 'options') .'" class="search"><span class="desktop-txt">'. get_field('search_txt', 'options') .'</span> <span class="hidden-icon"></span></a>' : '' );?>
        </div>

        <?php
            }
        ?>

        <div class="header__right">
            <?= show_header_menu('primary'); ?>
        </div>
	</header>
