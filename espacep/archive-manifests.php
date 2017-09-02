<?php get_header(); ?>

<div class="main main__content">
    <h1 class="page-title">Manifestes</h1>

    <div>
        <p>Notre propos concerne les milliers d’hommes, de femmes et de transgenres qui sous diverses appellations proposent des services à caractère sexuel ou érotique rémunérés chaque année en Belgique.</p>
        <p>Nous choisissons le terme « TRAVAILLEUR DU SEXE » (TDS) pour les désigner parce qu’il renvoie à plus de réalités différentes que les appellations « personnes prostituées », « escorte », « assistant sexuel », « acteur porno », etc…</p>
        <p>Ces personnes travaillent occasionnellement ou habituellement, dans des rues, cafés, bars,… ou pour un(e) patron(ne), dans des conditions de sécurité, de légalité et d’exploitation qui varient fortement d’une situation à l’autre.</p>
        <p>Forts de 25 ans de travail de terrain, nous formulons les constats suivant :</p>
    </div>

    <div>
        <?php $about = new WP_Query('post_type=manifests&order=ASC'); ?>
        <?php if ( $about->have_posts() ) : ?>
            <?php while ( $about->have_posts() ) : $about->the_post(); ?>
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
