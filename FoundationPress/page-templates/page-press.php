<?php
/*
Template Name: Press
*/
get_header(); ?>

<?php   if (is_page('press')){ ?>
  <?php //create_breadcrumbs(); ?>
<div id="press">
  <h2><?php echo $post->post_title; ?></h2>
  <?php $categories = get_categories('child_of=11&hide_empty=0&order=desc');
  $i = 0;
  foreach ($categories as $category) {?>
  <div class="griglia-press griglia-<?php echo$i; ?>" >
    <img class="thumbnail"  src="<?php bloginfo('template_url'); ?>/images/gp30/press.jpg">
    <p class="tit-cat"><?php echo $category->name; ?></p>
  </div>
    <?php
    $i++;
   } ?>
</div>

<?php } ?>

<div id="list-press">

  <div class='view'>    <?php
      $args = array(
          'post_type' => 'press',
          'cat' => 14, //Press 2016
          'posts_per_page' => 20
        );

        $press2016 = new WP_Query( $args );
        $i = 1;
        if ( $press2016->have_posts() ) :
          while ( $press2016->have_posts() ) : $press2016->the_post();

          $file = get_field('file');

          ?>
          <p><?php echo $i; ?>. <a href="<?php echo $file['url']; ?>" download><?php echo get_the_title(); ?></a></p>
            <?php

            $i++;
          endwhile;
        endif;
      ?></div>
  <div class='view'>    <?php
      $args = array(
          'post_type' => 'press',
          'cat' => 13, //Press 2015
          'posts_per_page' => 20
        );

        $press2015 = new WP_Query( $args );
        $i = 1;
        if ( $press2015->have_posts() ) :
          while ( $press2015->have_posts() ) : $press2015->the_post();

          $file = get_field('file');

          ?>
          <p><?php echo $i; ?>. <a href="<?php echo $file['url']; ?>" download><?php echo get_the_title(); ?></a></p>
            <?php
          $i++;
          endwhile;
        endif;
      ?></div>
      <div class='view'>    <?php
          $args = array(
              'post_type' => 'press',
              'cat' => 12, //Press 2015
              'posts_per_page' => 20
            );

            $press2014 = new WP_Query( $args );
            $i = 1;
            if ( $press2014->have_posts() ) :
              while ( $press2014->have_posts() ) : $press2014->the_post();

              $file = get_field('file');

              ?>
              <p><?php echo $i; ?>. <a href="<?php echo $file['url']; ?>" download><?php echo get_the_title(); ?></a></p>
                <?php
              $i++;
              endwhile;
            endif;
          ?></div>
  <div class='view'>
    <?php
    $args = array(
        'post_type' => 'press',
        'cat' => 17, //Press 2013
        'posts_per_page' => 20
      );

      $press2017 = new WP_Query( $args );
      $i = 1;
      if ( $press2017->have_posts() ) :
        while ( $press2017->have_posts() ) : $press2017->the_post();

        $file = get_field('file');

        ?>
        <p><?php echo $i; ?>. <a href="<?php echo $file['url']; ?>" download><?php echo get_the_title(); ?></a></p>
          <?php
        $i++;
        endwhile;
      endif;
    ?>
</div>
</div>


<?php get_footer();
