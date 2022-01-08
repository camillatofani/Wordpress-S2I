<?php get_header(); ?>

    <div class="contain">

            <?php

            $args = array (
                'type' => 'post',
                'posts_per_page' => -1
            );
            $lastBlog = new WP_Query ($args);

            if( $lastBlog->have_posts() ):

                while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                
                    <div class="col-search">

                        <?php get_template_part('content','search'); ?>

                    </div>
                
                <?php endwhile;

            endif;

            wp_reset_postdata();

            ?>
    
    </div>

<?php get_footer(); ?>