<?php get_header(); ?>

    <div class="contain">

        <div class="col-1">

            <?php
            
                $lastBlog = new WP_Query ('type=post&posts_per_page=3');

                if( $lastBlog->have_posts() ):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

                        <?php get_template_part('content', get_post_format()); ?>
                    
                    <?php endwhile;

                endif;

                wp_reset_postdata();

            ?>

        </div>
    
    </div>

    <div class="contain">

        <div class="col-3">

            <?php
            
            if( have_posts() ):

                while( have_posts() ): the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>
                
                <?php endwhile;

            endif;

            //PRINT TWO SKIP ONE POST
            
            $lastBlog = new WP_Query ('type=post&posts_per_page=1&offset=1');

            if( $lastBlog->have_posts() ):

                while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>
                
                <?php endwhile;

            endif;

            wp_reset_postdata();

            ?>

            <?php

            //PRINT ALL POST (NOT THE POST SETTINGS ON WP -SETTINGS>READING-) AND A CATEGORY (AND TEST ARRAY)

            $args = array (
                'type' => 'post',
                'posts_per_page' => -1,
                'cat' => 8
            );
            $lastBlog = new WP_Query ($args);
            // OR
            // $lastBlog = new WP_Query ('type=post&posts_per_page=-1&category_name=test');

            if( $lastBlog->have_posts() ):

                while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>
                
                <?php endwhile;

            endif;

            wp_reset_postdata();

            ?>

        </div>

        <div class="col-4">

            <?php get_sidebar(); ?>

        </div>
    
    </div>

<?php get_footer(); ?>