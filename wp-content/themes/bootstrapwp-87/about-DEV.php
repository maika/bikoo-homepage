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
            <?php the_post_thumbnail('thumbnail', array('onload' => "OnImageLoad(event);"));?>
          </div>
          <div class="AboutText">
            <h4><?php the_title();?></h4>
            <?php the_content();?>
          </div>
        </div>
     <?php endwhile; endif; wp_reset_query(); ?>
     </div>
     <hr />
    <div class="span3">
      <div class="NewsWidget">
      <?php
              // Blog post query
      query_posts( array( 'post_type' => 'post', 'category_name'=> 'news', 'showposts'=>8) );
      if (have_posts()) : while ( have_posts() ) : the_post(); ?>
      <div class="NewsSide">
        <?php echo shortcontent(20) ?>
      </div>
      <div class="NewsTime">
      	<p><?php echo bootstrapwp_posted_on();?></p>
      </div>
     <?php endwhile; endif; ?>
    </div>
    </div>
  </div>
</div><!-- /.container-fluid -->
<?php get_footer();?>
