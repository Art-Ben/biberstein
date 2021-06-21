<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Biberstain
 */
?>

        <footer class="footer">
            <div class="footer__cont">
                <div class="footer__logo">
                    <a href="<?= !is_front_page() ? get_home_url() : 'javascript:void(0);' ?>" class="lnk">
                        <img src="<?= get_template_directory_uri() . '/dist/images/log_big_blue.svg'?>" alt="Biberstein">
                    </a>

                    <?php echo( get_field('addr','options') ? '<span class="addr">'. get_field('addr','options') .'</span>' : ''); ?>
                </div>
                <div class="footer__links">
                    <?php
                    while( have_rows('footer_links','options') ) {
                        the_row();
                        ?>
                        <a href="<?= get_sub_field('lnk'); ?>" class="link"><?= get_sub_field('txt'); ?></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>

    </body>
</html>
