<?php
/**
  * Massively Wordpress Theme
  *
  * This is a wordpress theme based on the project 
  * @see https://html5up.net/
  *
  * in specific the theme
  * @see https://html5up.net/massively
  *
  * The template for displaying all single posts
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
  *
  * @package WordPress
  * @subpackage Appsetc_Massively_Theme
  * @since 0.1
  * @version 0.1
  * 
  */
  
get_header();
if ( have_posts() ) :
  while ( have_posts() ) : 
    the_post();
  ?>
    <!-- Post -->
      <section class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="major">
          <span class="date"><?php twentyten_posted_on(); ?></span>
          <h1><?php the_title(); ?></h1>
          <p>TODO - check what to include here | Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
          facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
          amet nullam sed etiam veroeros.</p>
        </header>
        <?php 
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
        ?>
        <div class="image main"><img src="<?php echo esc_url($featured_img_url) ?>" alt="" /></div>
        <?php the_content(); ?>
      </section>
  <?php comments_template( '', true );
  endwhile;
endif;
get_footer();