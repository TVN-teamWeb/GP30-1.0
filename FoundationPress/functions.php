<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );



function custom_post() {
/*Post type: SLIDER*/
  register_post_type( 'slider', /* nome del custom post type */
  // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
    array('labels' => array(
        'name' => 'Sliders', /* Nome, al plurale, dell'etichetta del post type. */
        'singular_name' => 'Slider', /* Nome, al singolare, dell'etichetta del post type. */
        'all_items' => 'Tutti gli sliders', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
        'add_new' => 'Aggiungi nuovo', /* Il testo per il pulsante Aggiungi. */
        'add_new_item' => 'Aggiungi nuovo slider', /* Testo per il pulsante Aggiungi nuovo post type */
        'edit_item' => 'Modifica Slider', /*  Testo per modifica */
        'new_item' => 'Nuovo Slider' /* Testo per nuovo oggetto */
      ), /* Fine dell'array delle etichette */
        'description' => 'Elenco Slider', /* Una breve descrizione del post type */
        'menu_icon' => get_stylesheet_directory_uri() . '/images/gp30/icons/sliders.png', /* Scegli l'icona da usare nel menù per il posty type */
        'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
        /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
        'supports' => array( 'title','excerpt', 'custom-fields','sticky')
    ) /* fine delle opzioni */
  ); /* fine della registrazione */

  /*Post type: CLAIM*/
    register_post_type( 'claim', /* nome del custom post type */
    // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
      array('labels' => array(
          'name' => 'Claims', /* Nome, al plurale, dell'etichetta del post type. */
          'singular_name' => 'Claim', /* Nome, al singolare, dell'etichetta del post type. */
          'all_items' => 'Tutti i Claims', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
          'add_new' => 'Aggiungi nuovo', /* Il testo per il pulsante Aggiungi. */
          'add_new_item' => 'Aggiungi nuovo claim', /* Testo per il pulsante Aggiungi nuovo post type */
          'edit_item' => 'Modifica claim', /*  Testo per modifica */
          'new_item' => 'Nuovo claim' /* Testo per nuovo oggetto */
        ), /* Fine dell'array delle etichette */
          'description' => 'Elenco Claims', /* Una breve descrizione del post type */
          'menu_icon' => get_stylesheet_directory_uri() . '/images/gp30/icons/claim.png', /* Scegli l'icona da usare nel menù per il posty type */
          'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
          /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
          'supports' => array( 'title','excerpt', 'custom-fields','sticky')
      ) /* fine delle opzioni */
    ); /* fine della registrazione */

    /*Post type: BOTTONI HP*/
      register_post_type( 'link', /* nome del custom post type */
      // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
        array('labels' => array(
            'name' => 'Link HP', /* Nome, al plurale, dell'etichetta del post type. */
            'singular_name' => 'Link', /* Nome, al singolare, dell'etichetta del post type. */
            'all_items' => 'Tutti i Links', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
            'add_new' => 'Aggiungi nuovo', /* Il testo per il pulsante Aggiungi. */
            'add_new_item' => 'Aggiungi nuovo link', /* Testo per il pulsante Aggiungi nuovo post type */
            'edit_item' => 'Modifica link', /*  Testo per modifica */
            'new_item' => 'Nuovo link' /* Testo per nuovo oggetto */
          ), /* Fine dell'array delle etichette */
            'description' => 'Elenco Links', /* Una breve descrizione del post type */
            'menu_icon' => get_stylesheet_directory_uri() . '/images/gp30/icons/link.png', /* Scegli l'icona da usare nel menù per il posty type */
            'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
            /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
            'supports' => array( 'title','excerpt', 'custom-fields','sticky')
        ) /* fine delle opzioni */
      ); /* fine della registrazione */

      /*Post type: GIURIA*/
        register_post_type( 'giuria', /* nome del custom post type */
        // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
          array('labels' => array(
              'name' => 'Giuria', /* Nome, al plurale, dell'etichetta del post type. */
              'singular_name' => 'Giuria', /* Nome, al singolare, dell'etichetta del post type. */
              'all_items' => 'Tutta la giuria', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
              'add_new' => 'Aggiungi nuovo', /* Il testo per il pulsante Aggiungi. */
              'add_new_item' => 'Aggiungi nuovo giurato', /* Testo per il pulsante Aggiungi nuovo post type */
              'edit_item' => 'Modifica giurato', /*  Testo per modifica */
              'new_item' => 'Nuovo giurato' /* Testo per nuovo oggetto */
            ), /* Fine dell'array delle etichette */
              'description' => 'Elenco Giurati', /* Una breve descrizione del post type */
              'menu_icon' => get_stylesheet_directory_uri() . '/images/gp30/icons/jury.png', /* Scegli l'icona da usare nel menù per il posty type */
              'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
              /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
              'supports' => array( 'title', 'excerpt', 'revisions','sticky'),
              'taxonomies' => array('category')
          ) /* fine delle opzioni */
        ); /* fine della registrazione */

        /*Post type: WINNER*/
        register_post_type( 'winners', /* nome del custom post type */
          // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
            array('labels' => array(
                'name' => 'Winners', /* Nome, al plurale, dell'etichetta del post type. */
                'singular_name' => 'Winner', /* Nome, al singolare, dell'etichetta del post type. */
                'all_items' => 'Tutti i Winners', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
                'add_new' => 'Aggiungi nuovo', /* Il testo per il pulsante Aggiungi. */
                'add_new_item' => 'Aggiungi nuovo winner', /* Testo per il pulsante Aggiungi nuovo post type */
                'edit_item' => 'Modifica winner', /*  Testo per modifica */
                'new_item' => 'Nuovo winner' /* Testo per nuovo oggetto */
              ), /* Fine dell'array delle etichette */
                'description' => 'Elenco Winners', /* Una breve descrizione del post type */
                'menu_icon' => get_stylesheet_directory_uri() . '/images/gp30/icons/winner.png', /* Scegli l'icona da usare nel menù per il posty type */
                'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
                /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
                'supports' => array( 'title', 'excerpt', 'thumbnail','revisions','sticky'),
                'taxonomies' => array('category')
            ) /* fine delle opzioni */
          ); /* fine della registrazione */

          /*Post type: PRESS*/
          register_post_type( 'press', /* nome del custom post type */
            // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
              array('labels' => array(
                  'name' => 'Press', /* Nome, al plurale, dell'etichetta del post type. */
                  'singular_name' => 'Press', /* Nome, al singolare, dell'etichetta del post type. */
                  'all_items' => 'Tutti le press', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
                  'add_new' => 'Aggiungi nuovo', /* Il testo per il pulsante Aggiungi. */
                  'add_new_item' => 'Aggiungi nuovo press', /* Testo per il pulsante Aggiungi nuovo post type */
                  'edit_item' => 'Modifica press', /*  Testo per modifica */
                  'new_item' => 'Nuovo press' /* Testo per nuovo oggetto */
                ), /* Fine dell'array delle etichette */
                  'description' => 'Elenco Press', /* Una breve descrizione del post type */
                  'menu_icon' => get_stylesheet_directory_uri() . '/images/gp30/icons/press.png', /* Scegli l'icona da usare nel menù per il posty type */
                  'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
                  /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
                  'supports' => array( 'title', 'excerpt', 'thumbnail','revisions','sticky'),
                  'taxonomies' => array('category')
              ) /* fine delle opzioni */
            ); /* fine della registrazione */

}

// Inizializzazione della funzione
add_action( 'init', 'custom_post');



/* function create_breadcrumbs() {

  $delimiter = '/';
  $home = 'Home';
  $before = '<span class="current">';
  $after = '</span>';

  if ( !is_home() && !is_front_page() || is_paged() ) {

    echo '<div id="breadcrumbs">';
      echo '<div class="prova">';
    global $post;
    $homeLink = get_bloginfo('url');
    echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . single_cat_title('', false) . $after;

    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '-' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_search() ) {
      echo $before . get_search_query() . $after;

    } elseif ( is_tag() ) {
      echo $before . single_tag_title('', false) . $after;

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
      echo '</div>';
    echo '</div>';

  }
} */
