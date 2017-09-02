<?php get_header(); ?>

<div class="main main__content">
    <h1 class="page-title">Antenne de Liège</h1>

    <div>
        <?php $about = new WP_Query('post_type=liege&order=ASC'); ?>
        <?php if ( $about->have_posts() ) : ?>
            <?php while ( $about->have_posts() ) : $about->the_post(); ?>
                <section class="media">
                    <h2 class="title media__title"><?php the_title(); ?></h2>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Il n'y a aucune information à afficher pour l'instant.</p>
        <?php endif; ?>
    </div>
    <div class="gmap-wrapper">
        <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.12054412268!2d5.573433115659974!3d50.64345237950251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0fa0eea904019%3A0xbf91a142d6e5adad!2sRue+Souverain+Pont+50%2C+4000+Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1504357994140" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<?php get_footer(); ?>
