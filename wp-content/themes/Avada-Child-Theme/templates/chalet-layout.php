<div class="container archive">
                <?php
                $count_posts = wp_count_posts('chaletalouer');
                $published_posts = $count_posts->publish;
                $max_columns = 3;
                $column = 12/$max_columns;
                $total_items = $published_posts;
                $remainder = $published_posts%$max_columns; //how many items are in the last row
                $first_row_item = ($total_items - $remainder); //first item in the last row
                ?>

                <?php $i=0; ?>

                <?php while
                ( have_posts() ) : the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                ?>

                <?php if ($i%$max_columns==0) { ?>
                    <div class="row">
                <?php } ?>

                <div class="col-md-<?php echo $column; ?>">
                    <?php echo '<div class="archive-detail" style="background: url('. $url .')">' ?>
                    <a href="<?php the_permalink() ?>">
                        <div class="link">
                            <div class="d-flex justify-content-around archive-header">
                                <h2 class="title"><?php the_title(); ?></h2>
                                <?php if (get_field('prix')) { ?>
                                    <h3 class="align-self-center"><b><?php the_field('prix'); ?> €</b></h3>
                                <?php } else { ?>
                                    <h3 class="align-self-center"><b><?php the_field('prix_location'); ?> € / sem</b></h3>
                                <?php } ?>
                            </div>
                            <div class="detail text-center d-flex justify-content-around">
                                <h5><i class="fas fa-users"></i> <?php the_field('nombre_de_place'); ?></h5>
                                <h5><i class="fas fa-bed"></i> <?php the_field('nombre_de_chambres'); ?></h5>
                                <h5><i class="fas fa-bath"></i> <?php the_field('nombre_de_salles_de_bains'); ?></h5>
                            </div>
                        </div>
                    </a>
                    </div>
                    </div>

                    <?php $i++; ?>

                    <?php if($i%$max_columns==0) { // if counter is multiple of 3 ?>
                        </div>
                    <?php } ?>

                <?php endwhile; ?>

                <?php if($i%$max_columns!=0) { // put closing div if loop is not exactly a multiple of 3 ?>
            </div>
        <?php } ?>
    </div>
