<?php get_header(); ?>

<div class="main main__content">
    <h1 class="page-title">Antenne de Namur</h1>

    <div>
        <?php $about = new WP_Query('post_type=namur&order=ASC'); ?>
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
        <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.3377456253693!2d4.851860015653458!3d50.47205577947829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c19966df411da1%3A0x2a8b76f94d30ca0!2sRue+du+Dr+Haibe+4%2C+5002+Namur!5e0!3m2!1sfr!2sbe!4v1504361421226" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<?php get_footer(); ?>
