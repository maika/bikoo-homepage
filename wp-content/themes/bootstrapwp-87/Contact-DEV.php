<?php
/**
 *
 * Template Name: Contact Dev Page
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
      query_posts( array( 'post_type' => 'post', 'category_name'=> 'contact') );
      if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <div class="ContactBox">
          <div class="AboutThumb">
            <?php // Checking for a post thumbnail
            if ( has_post_thumbnail() ) ?>
            <?php the_post_thumbnail('thumbnail');?>
          </div>
          <div class="AboutText">
            <h4><?php the_title();?></h4>
            <?php the_content();?>
          </div>
        </div>
     <?php endwhile; endif; wp_reset_query();?>
     </div>
    <div class="span3">
      <div class="ProjectWidget"></div>
      <h3>Projects</h3>
      <hr />
      <?php
              // Blog post query
      query_posts( array( 'post_type' => 'post', 'category_name'=> 'projects', 'showposts'=>3, 'orderby'=>'rand') );
      if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <div class="thumbBox thumbox-widget">
          <div class="thumbHolder">
            <?php // Checking for a post thumbnail
            if ( has_post_thumbnail() ) ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            <?php the_post_thumbnail('thumbnail');?></a>
          </div>
          <a class="thumbLink" href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h4><?php the_title();?></h4></a>
        </div> 
     <?php endwhile; endif;?>
    </div>
    </div>
  </div>
</div><!-- /.container-fluid -->
<?php get_footer();?>
