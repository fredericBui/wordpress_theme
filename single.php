<?php get_header(); ?>

<div id="single-content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
        endwhile;
    else :
        echo '<p>Aucun article trouvé.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
