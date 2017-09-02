<?php
/**
 * The template for contact page
 *
 * @package WordPress
 * @subpackage espacep
 * @since Espace P 0.0.1
 */
 get_header(); ?>

<div class="main main__content">
    <h1 class="page-title">Nous Contacter</h1>

    <div>
        <section class="contacts">
    		<h2 class="title">Choisissez une antenne :</h2>
    		<div class="contacts-wrapper">
    			<div class="contact-type">
    				<p class="contact-type--button"><a href="/espacep/liege">Liège</a></p>
    			</div>
    			<div class="contact-type">
    				<p class="contact-type--button"><a href="/espacep/bruxelles">Bruxelles</a></p>
    			</div>
    			<div class="contact-type">
    				<p class="contact-type--button"><a href="/espacep/mons">Mons</a></p>
    			</div>
    		</div>
            <div class="contacts-wrapper">
                <div class="contact-type">
                    <p class="contact-type--button"><a href="/espacep/charleroi">Charleroi</a></p>
                </div>
                <div class="contact-type">
                    <p class="contact-type--button"><a href="/espacep/arlon">Arlon</a></p>
                </div>
                <div class="contact-type">
                    <p class="contact-type--button"><a href="/espacep/namur">Namur</a></p>
                </div>
            </div>
    	</section>
    </div>
</div>

<?php get_footer(); ?>
