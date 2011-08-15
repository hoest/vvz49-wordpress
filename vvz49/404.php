<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="page">
  <div id="post-0" class="post error404 not-found">
    <h1 class="entry-title"><?php _e( 'Niet gevonden', 'vvz49' ); ?></h1>
    <div class="entry-content">
      <p><?php _e( 'Sorry, maar de opgevraagde pagina is niet gevonden.', 'vvz49' ); ?></p>
      <p><?php _e( 'Met behulp van onderstaand formulier kunt u zoeken in de site en misschien de juiste pagina vinden.', 'vvz49' ); ?></p>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>