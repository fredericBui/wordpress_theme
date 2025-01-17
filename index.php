<?php get_header(); ?>

<div id="content">
    <h1>Ceci est la page d'accueil</h1>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h2>', '</h2>');
            the_content();
        endwhile;
    else :
        echo '<p>Aucun contenu trouvé.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>

