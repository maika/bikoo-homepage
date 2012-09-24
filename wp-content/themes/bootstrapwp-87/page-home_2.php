<?php
/**
 *
 * Template Name: HomePage Test
 *
 *
 * @package WP-Bootstrap
 * @subpackage Second Default Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: March 4, 2012
 */
get_header(); ?>
<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <header class="jumbotron masthead">
    <div class="inner">
      <h1><?php the_title();?></h1>
      <?php the_content();?>
    </div>


  </header>
<?php endwhile; endif; ?>
<hr class="soften">
<div class="marketing">
  <div class="row">
    <div class="span9">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    </div>
    <div class="span3">
      <?php
      if ( function_exists('dynamic_sidebar')) dynamic_sidebar("home-right");
      ?>
    </div>  </div>
</div><!-- /.marketing -->
<?php get_footer();?>
