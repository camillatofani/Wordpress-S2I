<?php get_header(); ?>

    <div class="contain">

            <?php

            $args = array (
                'type' => 'post',
                'posts_per_page' => -1,
                'category__in' => array(8, 10),
                'category__not__in' => 1
            );
            $lastBlog = new WP_Query ($args);

            if( $lastBlog->have_posts() ):

                while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                
                    <div class="col-blog">

                        <?php get_template_part('content','featured'); ?>

                    </div>
                
                <?php endwhile;

            endif;

            wp_reset_postdata();

            ?>
    
    </div>

<?php get_footer(); ?>