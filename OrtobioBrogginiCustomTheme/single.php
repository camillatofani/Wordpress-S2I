<?php get_header(); ?>

    <div class="contain">

        <div class="col-3">

            <?php
            
            if( have_posts() ):

                while( have_posts() ): the_post(); ?>
                
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_title('<h1 class="entry-title">','</h1>'); ?>

                    <?php if (has_post_thumbnail()): ?>

                        <div class="thumbnal-img"><?php the_post_thumbnail('thumbnail'); ?></div>

                    <?php endif; ?>

                    <small><?php the_category(); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>

                    <p><?php the_content(); ?></p>

                    <hr>

                        <div>
                            <?php next_post_link(); ?>
                        </div>

                        <div>
                            <?php previous_post_link(); ?>
                        </div>

                    <hr>

                    <?php
                        if (comments_open()) {
                            comments_template();
                        } else {
                            echo '<h5>Sorry, comments are colosed!</h5>';
                        }
                    ?>

                    </article>
                
                <?php endwhile;

            endif;
            
            ?>

        </div>

        <div class="col-4">

            <?php get_sidebar(); ?>

        </div>
    
    </div>

<?php get_footer(); ?>