<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage espacep
 * @since Espace P 0.0.1
 */

get_header(); ?>

<div class="banner">
	<p class="homepage-title">Espace P <span class="homepage-min">A.S.B.L.</span> <span class="homepage-subtitle">Soutenir, défendre et accompagner les travailleurs du sexe dans leur vie et leur métier</span></p>
</div>

<div class="main main__content">
	<section class="informations">
		<h2 class="title">Informations</h2>
		<div class="informations-wrapper">
			<div class="info-type">
				<p class="info-type--button"><a href="infos_travailleurs">Travailleurs du sexe</a></p>
				<p class="info-type--text"><a href="infos_workers">Sex Worker speaking english ? Please visit this page.</a></p>
			</div>
			<div class="info-type">
				<p class="info-type--button"><a href="infos_clients">Clients</a></p>
			</div>
			<div class="info-type">
				<p class="info-type--button"><a href="infos_main">Curieux</a></p>
			</div>
			<div class="info-type">
				<p class="info-type--button"><a href="infos_students">Étudiants</a></p>
			</div>
		</div>
	</section>

	<section class="news">
		<h2 class="title">À la une</h2>
		<?php $newsList = new WP_Query('post_type=important'); ?>
		<?php if ( $newsList->have_posts() ) : ?>
			<ul class="news__list">
				<?php $i=1; while ( $newsList->have_posts() && i<=1) : $newsList->the_post(); ?>
					<li class="news__list__item">
						<h3 class="news-title"><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</li>
				<?php $i++; endwhile; ?>
			</ul>
		<?php endif; ?>
		<div class="more">
			<p class="button"><a href="actualites">Voir plus d'actualités</a></p>
		</div>
	</section>

</div>

<?php get_footer(); ?>
