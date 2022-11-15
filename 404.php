<?php

get_header();

?>

<div class="box-1" style="text-align:center">
    <img src="<?php echo DGL_IMG . "error.png" ?>" class="mb-4">
    <div class="section-header">
        <h2>¡Vaya! Parece que esta página no existe</h2>
        <p>Puede buscar lo que necesita debajo o volver a la página principal dándole a <a href="/" style="color:#7ac6bf">éste enlace</a>.</p>
        <div><?php get_search_form(); ?></div>
    </div>
</div>

<?php get_footer();