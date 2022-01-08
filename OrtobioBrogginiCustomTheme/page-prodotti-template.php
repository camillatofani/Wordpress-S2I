<?php
/* Template Name: Pagina Prodotti */
get_header(); ?>

    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
    <div class="header-page" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
        <h2><?php the_title(); ?></h2>
    </div>
    
        <div class="contain">

            <div class="col-3">

                <?php

                    $args = array(
                        'post_type' => 'prodotti',
                        'order' => 'date',
                    );
                    $loop = new WP_Query($args);
                            
                if( $loop->have_posts() ): ?>

                    <?php while( $loop->have_posts() ): $loop->the_post(); ?>

                        <?php get_template_part('content', 'prodotti'); ?>
                    
                    <?php endwhile; ?>

                <?php endif; ?>

            </div>

            <div class="col-1">

                <?php get_sidebar(); ?>
                
            </div>
        
        </div>

<?php get_footer(); ?>