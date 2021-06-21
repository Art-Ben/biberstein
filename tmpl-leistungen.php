<?php
/*
Template Name: Leistungen
Template Post Type: page
*/
$items = get_field('services_items');
?>

<?php
get_template_part('template-parts/page-title/title');
?>

<section class="pageServices">
    <div class="pageServices__cont basic-container">
        <?php
            if ( $items ) {
        ?>
            <div class="pageServices__items">
                <?php
                    foreach ( $items as $item ) {
                ?>
                        <div class="pageServices__items--item">
                            <div class="thumb">
                                <img src="<?= $item['thumb']; ?>" alt="<?= $item['title']; ?>">
                            </div>
                            <div class="content">
                                <span class="serviceName"><?= $item['name']; ?></span>
                                <h2 class="serviceTitle"><?= $item['title']; ?></h2>
                                <div class="desc"><?= $item['desc']; ?></div>
                            </div>
                        </div>
                <?php
                    }
                ?>
            </div>
        <?php
            }
        ?>
    </div>
</section>
