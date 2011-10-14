<div id="sidebar">
  <div class="skip-link">
    <a href="#page" title="<?php _e( 'Ga naar de inhoud', 'vvz49' ) ?>"><?php _e( 'Ga naar de inhoud', 'vvz49' ) ?></a>
  </div>
  <?php wp_page_menu( 'show_home=1&sort_column=menu_order' ); ?>

  <?php
    $page = $post->ID;
    $children = wp_list_pages('title_li=&child_of=' . $page . '&echo=0');

    if(is_page()) {
      if($children) {
        echo '<h2>' . get_the_title($page) . '</h2>';
        echo '<ul>';
        wp_list_pages('sort_column=menu_order&depth=1&child_of=' . $page . '&title_li');
        echo '</ul>';
      }
      else if($post->post_parent) {
        $page = $post->post_parent;

        echo '<h2>' . get_the_title($page) . '</h2>';
        echo '<ul>';
        wp_list_pages('sort_column=menu_order&depth=1&child_of=' . $page . '&title_li');
        echo '</ul>';
      }
    }
  ?>

  <?php wp_page_menu( 'menu_class=serviceMenu&include=22,37,154,156&sort_column=menu_order' ); ?>

  <div id="icon_banner">
    <a href="http://twitter.com/vvz49_soest/" target="_blank" title="Volg VVZ '49 op Twitter!">
      <img src="/wp-content/themes/vvz49/images/twitter.gif" width="24" height="24" alt="Volg VVZ '49 op Twitter!">
    </a>
    <a href="http://www.facebook.com/pages/Sportvereniging-VVZ-49/179781318718265" target="_blank" title="Vind ons leuk op Facebook!">
      <img src="/wp-content/themes/vvz49/images/facebook.gif" width="24" height="24" alt="Vind ons leuk op Facebook!">
    </a>
  </div>

  <?php
  if ( function_exists('register_sidebar') )
      register_sidebar(array(
          'before_widget' => '',
          'after_widget' => '',
          'before_title' => '<div class="title">',
          'after_title' => '</div>',
      ));
  ?>

  <div class="sidebar_footer">
    <p><strong>s.v. V.V.Z. '49</strong><br />Sportpark Zonnegloren<br />Eemweg 2a<br />3764 DG Soest<br />Kantine: 035-6018612<br /><a href="mailto:info@vvz49.nl">info@vvz49.nl</a></p>
  </div>
  <div class="inthepicture">
    <a href="http://www.autosmeeing.nl/Home/winterbanden.html" target="_blank"><img src="/wp-content/themes/vvz49/images/autosmeeing_banner_vvz.jpg" /></a>
  </div>
</div>
