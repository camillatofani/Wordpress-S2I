<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<div class="header-page" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
    <h2><?php the_title(); ?></h2>
</div>

        <div class="google-maps">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.924465654851!2d8.766121315761774!3d45.81277111813726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47867e9289d12891%3A0x35ce3d5b0b715e97!2sOrtobiobroggini%20-%20Consorzio%20Produttori%20Biologici%20Ortus%20Soc.Coop.A.R.L.!5e0!3m2!1sit!2sit!4v1632238693647!5m2!1sit!2sit" width="600" height="450" frameborder="0" style="border:0"></iframe>

        </div>

        <div class="contain contatti">

            <div class="col-1">
                <?php echo get_post_meta($post->ID, 'info-text', true); ?>
            </div>
            
            <div class="col-1">
                <?php the_content(); ?>
            </div>

        </div>

<?php endwhile; ?>

<?php get_footer(); ?>



<!-- <form action="http://localhost/ortobio-broggini/send.php" method="post">
    <input type="text" name="name" placeholder="Nome" />
    <input type="text" name="email" placeholder="Email" />
    <input type="text" name="phone" placeholder="Telefono" />
    <textarea name="msg" placeholder="Scrivici!"></textarea>
    <input type="checkbox" id="legacy" name="legacy" value="legacy" class="checkbox"> <div class="checkboxLink">Ho preso visione dell'informativa <a href="#" target="_blank">privacy</a> presente al precedente link e ne ho compreso il contenuto*</div><br />
    <input type="submit" value="Invia la richiesta" name="send" class="button button-green" />
</form> -->