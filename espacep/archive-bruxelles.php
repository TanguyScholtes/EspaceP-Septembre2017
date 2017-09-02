<?php get_header(); ?>

<div class="main main__content">
    <h1 class="page-title">Antenne de Bruxelles</h1>

    <div>
        <?php $about = new WP_Query('post_type=bruxelles&order=ASC'); ?>
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
        <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.486181061281!2d4.36126481566817!3d50.85919847953381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c3779fe51cb7%3A0x2ca25c2a31557696!2sRue+des+Plantes+116%2C+1030+Schaerbeek!5e0!3m2!1sfr!2sbe!4v1504358666603" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<?php get_footer(); ?>
