<?php get_header(); ?>

<div class="main main__content">
    <h1 class="page-title">Informations pour les Travailleurs du Sexe</h1>

    <div>
        <p><a href="/espacep/workers">Speak English ? See this page in English.</a></p>
    </div>

    <div>
        <?php $about = new WP_Query('post_type=travailleurs&order=ASC'); ?>
        <?php if ( $about->have_posts() ) : ?>
            <?php while ( $about->have_posts() ): ?>
                <?php $about->the_post(); ?>
                <section class="media">
                    <h2 class="title media__title"><?php the_title(); ?></h2>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
