<?php
/**
 *
 * Template Name: About DEV Page
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: March 4, 2012
 */
get_header(); ?>
<div class="container">
<hr />
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span9">
    <?php
              // Blog post query
      query_posts( array( 'post_type' => 'post', 'category_name'=> 'about') );
      if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <div class="AboutBox">
          <div class="AboutThumb">
            <?php // Checking for a post thumbnail
            if ( has_post_thumbnail() ) ?>
            <?php the_post_thumbnail('medium', array('onload' => "OnImageLoad(event);"));?>
          </div>
          <div class="AboutText">
            <h2><?php the_title();?></h2>
            <?php the_content();?>
          </div>
        </div>
     <?php endwhile; endif; ?>
     </div>
    <div class="span3">
      <?php
      if ( function_exists('dynamic_sidebar')) dynamic_sidebar("home-right");
      ?>
    </div>
  </div>
</div><!-- /.container-fluid -->
<?php get_footer();?>
