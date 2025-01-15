<?php get_header(); ?>

<div id="archive-content">
    <h1>Archives</h1>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h2>', '</h2>');
            the_excerpt();
        endwhile;
    else :
        echo '<p>Aucun contenu d’archive trouvé.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
