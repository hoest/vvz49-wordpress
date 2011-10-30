<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="page" class="index">

  <div class="sitepad">
    <?php
      // if the post has a parent
      if($post->post_parent) {
        // collect ancestor pages
        $relations = get_post_ancestors($post->ID);

        $relations_string = implode(",", $relations);
        // use include to list only the collected pages.
        echo wp_page_menu("include=" . $relations_string);
      }
    ?>
  </div>

  <?php /* The Loop — with comments! */ ?>
  <?php while ( have_posts() ) : the_post() ?>

  <?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php /* an h2 title */ ?>
    <h2 class="entry-title">
      <a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink naar %s', 'vvz49'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h2>

    <?php /* Microformatted, translatable post meta */ ?>
    <div class="entry-meta">
      <!-- <span class="meta-prep meta-prep-author"><?php _e('Geschreven door ', 'vvz49'); ?></span> -->
      <!-- <span class="author vcard">
        <a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'vvz49' ), $authordata->display_name ); ?>"><?php the_author(); ?></a>
      </span>
      <span class="meta-sep"> | </span> -->
      <span class="meta-prep meta-prep-entry-date"><?php _e('Gepubliceerd op ', 'vvz49'); ?></span>
      <span class="entry-date">
        <abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr>
      </span>
      <?php edit_post_link( __( 'Bewerken', 'vvz49' ), "<span class=\"meta-sep\"> | </span><span class=\"edit-link\">", "</span>" ) ?>
    </div>

    <?php /* The entry content */ ?>
    <div class="entry-content">
      <?php the_content( __( 'Lees verder <span class="meta-nav">&raquo;</span>', 'vvz49' ) ); ?>
      <?php wp_link_pages('before=<div class="page-link">' . __( 'Pagina\'s:', 'vvz49' ) . '&after=</div>') ?>
    </div>

    <?php /* Microformatted category and tag links along with a comments link */ ?>
    <div class="entry-utility">
      <?php if(get_the_category_list(', ') != '') { ?>
      <span class="cat-links">
        <span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Bericht geplaatst in ', 'vvz49' ); ?></span>
        <?php echo get_the_category_list(', '); ?>
      </span>
      <?php edit_post_link( __( 'Bewerken', 'vvz49' ), "<span class=\"meta-sep\"> | </span><span class=\"edit-link\">", "</span>" ) ?>
      <?php } else { ?>
      <?php edit_post_link( __( 'Bewerken', 'vvz49' ), "<span class=\"edit-link\">", "</span>" ) ?>
      <?php } ?>
    </div>

  </div>
  <?php /* Close up the post div and then end the loop with endwhile */ ?>

  <?php endwhile; ?>

  <?php /* Bottom post navigation */ ?>
  <?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
  <div id="nav-below" class="navigation">
    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Oudere berichten', 'vvz49' )) ?></div>
    <div class="nav-next"><?php previous_posts_link(__( 'Nieuwere berichten <span class="meta-nav">&raquo;</span>', 'vvz49' )) ?></div>
  </div>
  <?php } ?>

</div>
<?php get_footer(); ?>