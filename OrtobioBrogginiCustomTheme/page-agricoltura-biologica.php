<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<div class="header-page" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
    <h2><?php the_title(); ?></h2>
</div>

<div class="contain">
    <div class="col-1">
        <h3><?php echo get_post_meta($post->ID, 'intro-text', true); ?></h3>
        <?php the_content(); ?>
    </div>
</div>

        <div class="contain gallery">

            <!-- Gallery -->

            <?php if ( get_post_meta( $post->ID, 'gallery-1', true ) ) : ?>
                <div class="col-1">
                    <img class="img-radius" src="<?php echo get_post_meta($post->ID, 'gallery-1', true); ?>" width="100%" />
                </div>
            <?php endif; ?>

            <?php if ( get_post_meta( $post->ID, 'gallery-2', true ) ) : ?>
                <div class="col-1">
                    <img class="img-radius" src="<?php echo get_post_meta($post->ID, 'gallery-2', true); ?>" width="100%" />
                </div>
            <?php endif; ?>

            <?php if ( get_post_meta( $post->ID, 'gallery-3', true ) ) : ?>
                <div class="col-1">
                    <img class="img-radius" src="<?php echo get_post_meta($post->ID, 'gallery-3', true); ?>" width="100%" />
                </div>
            <?php endif; ?>

            <?php if ( get_post_meta( $post->ID, 'gallery-4', true ) ) : ?>
                <div class="col-1">
                    <img class="img-radius" src="<?php echo get_post_meta($post->ID, 'gallery-4', true); ?>" width="100%" />
                </div>
            <?php endif; ?>

            <?php if ( get_post_meta( $post->ID, 'gallery-5', true ) ) : ?>
                <div class="col-1">
                    <img class="img-radius" src="<?php echo get_post_meta($post->ID, 'gallery-5', true); ?>" width="100%" />
                </div>
            <?php endif; ?>

        </div>

<?php endwhile; ?>

<?php get_footer(); ?>