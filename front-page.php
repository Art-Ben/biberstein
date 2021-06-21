<?php
get_header();
?>

<?php
    get_template_part('template-parts/page-title/title');
?>

<section class="advnt">
    <?php
        if( have_rows('advnt_items') ) {
            while ( have_rows('advnt_items') ) {
                the_row();
    ?>
    <div class="advnt__item">
        <span class="number">
            <?= get_sub_field('num'); ?>
        </span>
        <span class="txt">
            <?= get_sub_field('txt'); ?>
        </span>
    </div>
    <?php
            }
        }
    ?>
</section>

<section class="cta">
    <?php
        if( have_rows('cta_items') ) {
            while ( have_rows('cta_items') ) {
                the_row();
    ?>
    <div class="cta__column">
        <?php
            echo( get_sub_field('cta_subtitle') ? '<span class="smallTitle">'. get_sub_field('cta_subtitle') .'</span>' : '' );
        ?>

        <?php
            echo( get_sub_field('cta_title') ? '<h2 class="title">'. get_sub_field('cta_title') .'</h2>' : '' );
        ?>

        <?php
            echo( get_sub_field('cta_desc') ? '<div class="desc">'. get_sub_field('cta_desc') .'</div>' : '' );
        ?>

        <?php
            if( have_rows('cta_btns') ) {
                echo '<div class="btnLine">';

                while( have_rows('cta_btns') ) {
                    the_row();
        ?>
                    <a href="<?= get_sub_field('lnk'); ?>" class="lnk"><?= get_sub_field('txt'); ?></a>
        <?php
                }
                echo '</div>';
            }
        ?>
    </div>
    <?php
            }
        }
    ?>
</section>

<?php
get_footer();
