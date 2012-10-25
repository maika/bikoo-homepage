<?php
/**
 *
 * Template Name: DEV HOME PAGE
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: March 4, 2012
 */
get_header(); ?>

  </header>
        <?php
              // Blog post query
      query_posts( array( 'post_type' => 'page', 'page_id' => '2' ) );
      if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <div id="homeHero" class="hero-unit">
         <?php // Checking for a post thumbnail
            if ( has_post_thumbnail() ) ?>
            <?php the_post_thumbnail('bikoo-hero', array('onload' => "OnImageLoad(event);"));?>
          <h1><?php the_title();?></h1>
          <?php the_content();?>
            <a target="_blank" href="http://www.amazon.com/gp/product/B009SJ3JPM/ref=as_li_tf_il?ie=UTF8&camp=1789&creative=9325&creativeASIN=B009SJ3JPM&linkCode=as2&tag=bikoo-20" class="btn btn-primary btn-large mast" id="buy">
              Add to Kindle
            </a>
            <a href="http://bikoo.jp/demon_hunters/" class="btn btn-primary btn-large mast">
              Read More
            </a>
        </div>
        
     <?php endwhile; endif; wp_reset_query()?>
  <hr />
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span10">
        <?php
              // Blog post query
      query_posts( array( 'post_type' => 'post', 'category_name'=> 'projects') );
      if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <div class="thumbBox">
          <div class="thumbHolder">
            <?php // Checking for a post thumbnail
            if ( has_post_thumbnail() ) ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            <?php the_post_thumbnail('thumbnail', array('onload' => "OnImageLoad(event);"));?></a>
          </div>
          <a class="thumbLink" href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h4><?php the_title();?></h4></a>
        </div>
     <?php endwhile; endif; ?>
     </div>
     <div class="span2">
      <?php
      if ( function_exists('dynamic_sidebar')) dynamic_sidebar("home-right");
      ?>
     </div>
    </div>
  </div><!-- /.container-fluid -->
<?php get_footer();?>
