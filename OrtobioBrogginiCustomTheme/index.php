<?php get_header(); ?>

    <div class="contain">

        <div class="col-3">

            <?php

            $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
            echo $currentPage;
            $args = array(
                'posts_per_page' => 3,
                'paged' => $currentPage,
            );
            query_posts($args);
            
            if( have_posts() ):

                while( have_posts() ): the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>
                
                <?php endwhile; ?>

                <div>
                    <?php next_posts_link('Older posts'); ?>
                </div>

                <div>
                    <?php previous_posts_link('New posts'); ?>
                </div>

                <?php

                endif;
                    
                    wp_reset_query();

            ?>

        </div>

        <div class="col-4">

            <?php get_sidebar(); ?>

        </div>
    
    </div>

<?php get_footer(); ?>