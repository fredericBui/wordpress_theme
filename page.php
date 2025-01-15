<?php get_header(); ?>

<div id="page-content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h2>', '</h2>');
            the_content();
        endwhile;
    else :
        echo '<p>Aucune page trouvée.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
