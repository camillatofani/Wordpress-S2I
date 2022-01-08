<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="containProduct">

        <div class="col-1-prod">
            
            <?php if (has_post_thumbnail()): ?>

                <div class="thumbnal-img"><?php the_post_thumbnail('thumbnail'); ?></div>

            <?php endif; ?>

        </div>

        <div class="col-3-prod">

            <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())),'</a></h1>'); ?>
            
            <p><?php the_excerpt(); ?></p>
            
        </div>

    </div>

</article>