<section class="heroBlock">
    <div class="column">
        <div class="heroBlock__txt">
            <h1 class="heroBlock__txt--title">
                <?= get_field('hero_tit'); ?>
            </h1>

            <span class="heroBlock__txt--small">
                <?= get_field('hero_small'); ?>
            </span>
        </div>
    </div>
    <div class="column">
        <div class="heroBlock__image">
            <img src="<?= get_field('hero_thumb'); ?>" alt="<?= get_field('hero_tit'); ?>" class="thumb">
        </div>
    </div>
</section>