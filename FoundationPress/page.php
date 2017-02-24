<?php get_header(); ?>

<?php   if (is_page( array( 'il-premio', 'i-premi'))){ ?>
  <?php //create_breadcrumbs(); ?>
    <div id="page-container">
      <?php if ( have_posts() ) : ?>
    	<?php while ( have_posts() ) : the_post();
        the_content('', TRUE);
      endwhile; ?>
    <?php endif; ?>

    </div>

<?php }?>
<?php get_footer();
