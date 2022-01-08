<?php get_header(); ?>

<div class="header-page prod"><h2><?php the_title(); ?></h2></div>

    <div class="contain">

        <div class="col-3">

            <?php
            
            if( have_posts() ):

                while( have_posts() ): the_post(); ?>
                
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <p><?php the_content(); ?></p>

                    </article>
                
                <?php endwhile;

            endif;
            
            ?>

        </div>

        <div class="col-1">

            <p><?php get_sidebar(); ?></p>

        </div>
    
    </div>

<?php get_footer(); ?>