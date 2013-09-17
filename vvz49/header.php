<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head>
    <title><?php
      if ( is_single() ) {
        single_post_title();
      }
      elseif ( is_home() || is_front_page() ) {
        bloginfo('name');
        print ' &#8211; ';
        bloginfo('description');
        get_page_number();
      }
      elseif ( is_page() ) {
        single_post_title('');
      }
      elseif ( is_search() ) {
        bloginfo('name');
        print ' | Zoekresultaten voor ' . wp_specialchars($s);
        get_page_number();
      }
      elseif ( is_404() ) {
        bloginfo('name');
        print ' | Niet gevonden';
      }
      else {
        bloginfo('name');
        wp_title(' &#8211; ');
        get_page_number();
      }
    ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <link rel="stylesheet" type="text/css" href="/wp-content/plugins/ninja-forms/css/ninja-forms-display.css" />
    <link rel="stylesheet" type="text/css" href="/wp-content/plugins/ninja-forms/css/qtip.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s laatste berichten', 'vvz49' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s laatste reacties', 'vvz49' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
    <script src="/wp-content/themes/vvz49/js/calibri.cufonfonts.js" type="text/javascript"></script>
    <script type="text/javascript">
      Cufon.replace('h1', { fontFamily: 'Calibri Bold', hover: true });
    </script>
  </head>
  <body>
    <div id="main">
      <div class="bgbalk">
        <div id="header">
          <h1><?php bloginfo( 'name' ) ?></h1>
          <p><em><?php bloginfo( 'description' ) ?></em></p>
          <img class="voetbalschoen" src="/wp-content/themes/vvz49/images/vvz49-voetbalschoen.png" width="429" height="275" alt="" />
          <img class="logo" src="/wp-content/themes/vvz49/images/vvz-logo.png" width="178" height="275" alt="" />
        </div>
        <?php if (function_exists('ninja_annc_display_all')) { ninja_annc_display_all(); } ?>

