<?php get_header(); ?>

    <div class="header-page prod">

        <h2>Prodotti</h2>

    </div>

    <div class="contain">

        <div class="col-3">

            <?php
            
            if( have_posts() ): ?>


                <?php while( have_posts() ): the_post(); ?>

                    <?php get_template_part('content', 'prodotti'); ?>
                
                <?php endwhile; ?>

            <?php endif; ?>

        </div>

        <div class="col-1">

            <?php get_sidebar(); ?>

        </div>
    
    </div>

<?php get_footer(); ?>