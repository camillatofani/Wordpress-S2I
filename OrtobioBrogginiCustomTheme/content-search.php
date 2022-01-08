<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_title('<h1 class="entry-title">','</h1>'); ?>

<?php if (has_post_thumbnail()): ?>

    <div class="thumbnal-img"><?php the_post_thumbnail('thumbnail'); ?></div>

<?php endif; ?>

<small><?php the_category(); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>

<p><?php the_content(); ?></p>

</article>