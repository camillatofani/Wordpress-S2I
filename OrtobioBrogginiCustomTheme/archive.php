<?php get_header(); ?>

    <div class="contain">

        <div class="col-3">

            <?php
            
            if( have_posts() ): ?>

                <div class="headerCategory">                

                    <?php the_archive_title('<h2>', '</h2>'); ?>
                    <?php the_archive_description('<p>', '</p>'); ?>

                </div>


                <?php while( have_posts() ): the_post(); ?>

                    <?php get_template_part('content', 'archive'); ?>
                
                <?php endwhile; ?>

                <div>

                    <?php the_posts_navigation(); ?>

                </div>

            <?php endif; ?>

        </div>

        <div class="col-4">

            <?php get_sidebar(); ?>

        </div>
    
    </div>

<?php get_footer(); ?>