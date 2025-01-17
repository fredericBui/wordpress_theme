<?php get_header(); ?>

<div class="container">
    <h1>Ceci est la page d'accueil</h1>
    <?php if (have_posts()) : ?>
        <header class="page-header">
            <h1 class="page-title">Expériences</h1>
        </header>
        
        <div class="posts-list">
            <?php
            // La boucle WordPress
            while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>              
                    <div class="entry-content">
                        <?php the_content(); // Affiche un extrait de l'article ?>
                    </div>
                    
                    <footer class="entry-footer">
                        <p class="entry-meta">
                            Publié le <?php the_time('j F Y'); ?> par <?php the_author(); ?>
                        </p>
                    </footer>
                </article>
            <?php endwhile; ?>
        </div>
        
        <div class="pagination">
            <?php
            // Affiche les liens de pagination
            the_posts_pagination(array(
                'prev_text' => 'Précédent',
                'next_text' => 'Suivant',
            ));
            ?>
        </div>
    <?php else : ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

