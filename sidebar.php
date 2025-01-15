<aside>
    <h3>Barre latérale</h3>
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <p>Aucun widget dans la barre latérale.</p>
    <?php endif; ?>
</aside>
