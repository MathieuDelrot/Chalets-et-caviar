<?php
/**
 * Template used for single posts and other post-types
 * that don't have a specific template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>

<section id="content" <?php Avada()->layout->add_style( 'content_style' ); ?>>
    <div class="container" data-margin-top="50px">
        <div class="row">
            <div class="col-md-6">
                <h1><?php the_title(); ?></h1>
                <p><?php the_field('description'); ?></p>
                <div class="row characteristic">
                    <div class="col-md-12">
                        <h3>Prix : <b><?php the_field('prix_location'); ?> €</b></h3>
                        <h3>Places : <b><?php the_field('nombre_de_place'); ?></b></h3>
                        <h3>Chambres : <b><?php the_field('nombre_de_chambres'); ?></b></h3>
                        <h3>Salles de bains : <b><?php the_field('nombre_de_salles_de_bains'); ?></b></h3>
                    </div>
                </div>
                <div class="row">
                    <a class="fusion-button fusion-button-black button-flat fusion-button-default-size button-custom button-1 fusion-button-default-span fusion-button-default-type" target="_self" href="contact/"><span class="fusion-button-text">Contactez-nous</span></a>
                </div>
            </div>
            <div class="col-md-6">
                <?php the_post_thumbnail( 'medium_large' ); ?>
            </div>
        </div>
    </div>
</section>
<?php do_action( 'avada_after_content' ); ?>
<?php get_footer(); ?>
