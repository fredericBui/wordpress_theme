<?php get_header(); ?>

<div class="error-404-container">
    <h1 class="error-message">Oups! Page non trouvée.</h1>
    <p>Il semble que la page que vous recherchez n'existe pas ou a été déplacée.</p>
    <a href="<?php echo home_url(); ?>" class="back-home">Retour à l'accueil</a>
</div>

<style>
    /* Style de base pour le container 404 */
    .error-404-container {
        text-align: center;
        margin-top: 100px;
    }

    .error-message {
        font-size: 50px;
        font-weight: bold;
        color: #333;
        position: relative;
        display: inline-block;
        perspective: 1000px; /* nécessaire pour l'effet 3D */
    }

    /* Animation 3D et effet au survol */
    .error-message:before {
        content: attr(data-text);
        position: absolute;
        top: 0;
        left: 0;
        color: #ff6347;
        z-index: -1;
        transform: rotateY(30deg);
        filter: blur(3px);
        opacity: 0.7;
    }

    .error-message:hover {
        transform: rotateY(20deg) rotateX(20deg);
        transition: transform 0.3s ease;
    }

    .error-message:hover:before {
        transform: rotateY(-30deg);
        transition: transform 0.3s ease;
    }

    /* Style pour le lien retour */
    .back-home {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #0073aa;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 18px;
        transition: background-color 0.3s;
    }

    .back-home:hover {
        background-color: #005177;
    }
</style>

<script>
    // Ajouter l'attribut 'data-text' à l'élément avec la classe .error-message
    document.querySelector('.error-message').setAttribute('data-text', document.querySelector('.error-message').textContent);
</script>

<?php get_footer(); ?>
