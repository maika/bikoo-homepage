<style>
.social-media-mashup{
  display: none;
}
</style>
<?php
/**
 *
 * Template Name: PRESS PAGE DEV
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: March 4, 2012
 */
$year = !empty($_GET['year']) ? intval($_GET['year']) : null;
$month = !empty($_GET['monthnum']) ? $_GET['monthnum'] : null;
get_header(); ?>

  </header>
  <hr />
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span10">
    <?php
              // Blog post query
      query_posts( array( 'post_type' => 'post', 'category_name'=> 'news', 'showposts'=>8, 'year' => $year, 'monthnum'=>$monthnum) );
      if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <div class="AboutBox">
          <div class="AboutThumb">
            <?php // Checking for a post thumbnail
            if ( has_post_thumbnail() ) ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
              <?php the_post_thumbnail('medium', array('onload' => "OnImageLoad(event);"));?></a>
          </div>
          <div class="AboutText">
            <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
            <?php echo content(90) ?>
          </div>
        </div>
     <?php endwhile; endif; ?>
     </div>
     <vr />
    <div class="span2">
      <?php
      if ( function_exists('dynamic_sidebar')) dynamic_sidebar("home-middle");
      ?>
    </div>
  </div>
</div><!-- /.container-fluid -->
<?php get_footer();?>
