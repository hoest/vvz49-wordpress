<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="page" class="single">
  <?php the_post(); ?>

  <div class="sitepad">
    <?php
      //if the post has a parent
      if($post->post_parent) {
        //collect ancestor pages
        $relations = get_post_ancestors($post->ID);

        $relations_string = implode(",", $relations);
        //use include to list only the collected pages.
        echo wp_page_menu("include=" . $relations_string);
      }
    ?>
  </div>

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="entry-title">
      <a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink naar %s', 'vvz49'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h1>

    <div class="entry-meta">
      <!-- <span class="meta-prep meta-prep-author"><?php _e('Geschreven door ', 'vvz49'); ?></span>
      <span class="author vcard">
        <a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'vvz49' ), $authordata->display_name ); ?>"><?php the_author(); ?></a>
      </span>
      <span class="meta-sep"> | </span> -->
      <span class="meta-prep meta-prep-entry-date"><?php _e('Gepuliceerd op ', 'vvz49'); ?></span>
      <span class="entry-date">
        <abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr>
      </span>
      <?php edit_post_link( __( 'Bewerken', 'vvz49' ), "<span class=\"meta-sep\"> | </span><span class=\"edit-link\">", "</span>" ) ?>
    </div>

    <?php /* The entry content */ ?>
    <div class="entry-content">
      <?php the_content(); ?>
      <?php wp_link_pages('before=<div class="page-link">' . __( 'Pagina\'s:', 'vvz49' ) . '&after=</div>') ?>
    </div>

    <div class="addThis">
      <!-- AddThis Button BEGIN -->
      <div class="addthis_toolbox addthis_default_style ">
        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
        <a class="addthis_button_tweet"></a>
        <a class="addthis_counter addthis_pill_style"></a>
      </div>
      <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4ce94d686174b2d7"></script>
      <!-- AddThis Button END -->
    </div>

    <?php /* Microformatted category and tag links along with a comments link */ ?>
    <div class="entry-utility">
      <span class="cat-links">
        <span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Bericht geplaatst in ', 'vvz49' ); ?></span>
        <?php echo get_the_category_list(', '); ?>
      </span>
      <!-- <span class="meta-sep"> | </span>
      <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'vvz49' ) . '</span>', ", ", "</span><span class=\"meta-sep\">|</span>" ) ?> -->
      <!-- <span class="comments-link"><?php comments_popup_link( __( 'Reageer', 'vvz49' ), __( '1 reactie', 'vvz49' ), __( '% reacties', 'vvz49' ) ) ?></span> -->
      <?php edit_post_link( __( 'Bewerken', 'vvz49' ), "<span class=\"meta-sep\"> | </span><span class=\"edit-link\">", "</span>" ) ?>
    </div>

    <div id="nav-below" class="navigation">
      <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
      <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
    </div><!-- #nav-below -->

  </div>
</div>
<?php get_footer(); ?>