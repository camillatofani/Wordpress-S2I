<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<div class="header-page" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
    <h2><?php the_title(); ?></h2>
</div>

        <div class="contain">
            
            <div class="col-1"><?php the_content(); ?></div>

        </div>

<?php endwhile; ?>

<?php get_footer(); ?>