<?php
/**
 * The template for displaying all posts.
 *
 * Test Post Template
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
   <div class="container-fluid">
     <div class="row-fluid">
        <div class="row content">
          <div class="span4">
              <?php getAttachedimages('large', '<div class="post-image-holder">', '</div>'); ?>
          </div><!-- /.span4 -->
<div class="span8">

     
 <!-- Masthead
      ================================================== -->
      <header class="jumbotron subhead" id="overview">
        <h1><?php the_title();?></h1>
      </header>
   <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
            <?php the_content();?>
            <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
<?php endwhile; // end of the loop. ?>
<hr />
          </div><!-- /.span8 -->
          </div><!-- /.row -->
          </div><!-- /.container -->
<?php get_footer(); ?>