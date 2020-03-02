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
                <h2>Prix : <b><?php the_field('prix'); ?> €</b></h2>
            </div>
            <div class="col-md-6">
                <?php the_post_thumbnail( 'medium_large' ); ?>
                <div class="row">
                    <div class="col-md-4">
                        <h3>Surface : <b><?php the_field('surface'); ?> m<sup>2</sup></b></h3>
                    </div>
                    <div class="col-md-4">
                        <h3>Nombre de chambres : <b><?php the_field('nombre_de_chambres'); ?></b></h3>
                    </div>
                    <div class="col-md-4">
                        <h3>Nombre de salles de bains : <b><?php the_field('nombre_de_salles_de_bains'); ?></b></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php do_action( 'avada_after_content' ); ?>
<?php get_footer(); ?>
