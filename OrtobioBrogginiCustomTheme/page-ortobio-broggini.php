<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<div class="header-page" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
    <h2><?php echo get_post_meta($post->ID, 'slider-text', true); ?></h2>
</div>
        <div class="contain">
            <div class="news align-center"><?php echo get_post_meta($post->ID, 'news', true); ?></div>
        </div>

        <div class="contain">

            <div class="col-3">
                <h3><?php echo get_post_meta($post->ID, 'intro-text', true); ?></h3>
                <?php the_content(); ?>
            </div>

            <div class="col-1 instagram"><a href="<?php echo get_post_meta($post->ID, 'link-instagram', true); ?>" target="_blank"><img class="img-radius" src="<?php echo get_post_meta($post->ID, 'img-instagram', true); ?>" width="100%" /></a></div>

        </div>

        <div class="contain gallery">

            <!-- Link -->

            <?php if ( get_post_meta( $post->ID, 'link-img-1', true ) ) : ?>
                <div class="col-1">
                    <img class="img-radius img-home" src="<?php echo get_post_meta($post->ID, 'link-img-1', true); ?>" width="100%" />
                    <h3><a href="<?php echo get_post_meta($post->ID, 'link-link-1', true); ?>"><?php echo get_post_meta($post->ID, 'link-title-1', true); ?></a></h3>
                    <?php echo get_post_meta($post->ID, 'link-text-1', true); ?>
                </div>
            <?php endif; ?>

            <?php if ( get_post_meta( $post->ID, 'link-img-2', true ) ) : ?>
                <div class="col-1">
                    <img class="img-radius img-home" src="<?php echo get_post_meta($post->ID, 'link-img-2', true); ?>" width="100%" />
                    <h3><a href="<?php echo get_post_meta($post->ID, 'link-link-2', true); ?>"><?php echo get_post_meta($post->ID, 'link-title-2', true); ?></a></h3>
                    <?php echo get_post_meta($post->ID, 'link-text-2', true); ?>
                </div>
            <?php endif; ?>

            <?php if ( get_post_meta( $post->ID, 'link-img-3', true ) ) : ?>
                <div class="col-1">
                    <img class="img-radius img-home" src="<?php echo get_post_meta($post->ID, 'link-img-3', true); ?>" width="100%" />
                    <h3><a href="<?php echo get_post_meta($post->ID, 'link-link-3', true); ?>"><?php echo get_post_meta($post->ID, 'link-title-3', true); ?></a></h3>
                    <?php echo get_post_meta($post->ID, 'link-text-3', true); ?>
                </div>
            <?php endif; ?>

            <?php if ( get_post_meta( $post->ID, 'link-img-4', true ) ) : ?>
                <div class="col-1">
                    <img class="img-radius img-home" src="<?php echo get_post_meta($post->ID, 'link-img-4', true); ?>" width="100%" />
                    <h3><a href="<?php echo get_post_meta($post->ID, 'link-link-4', true); ?>"><?php echo get_post_meta($post->ID, 'link-title-4', true); ?></a></h3>
                    <?php echo get_post_meta($post->ID, 'link-text-4', true); ?>
                </div>
            <?php endif; ?>

        </div>

<?php endwhile; ?>

<?php get_footer(); ?>