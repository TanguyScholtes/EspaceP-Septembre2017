<?php get_header(); ?>

<div class="main main__content">
    <h1 class="page-title">Rapports d'activité</h1>

    <div>
        <?php $posts = new WP_Query('post_type=activities&order=DES');
            $posts = $posts -> posts;
        ?>
        <?php if ( $posts ) : ?>
            <ul class="link-list">
                <?php foreach( $posts as $post ):?>
                    <li class="link-list-item">
                        <a class="link-list-item__link" href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Il n'y a aucune activité à afficher pour l'instant.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
