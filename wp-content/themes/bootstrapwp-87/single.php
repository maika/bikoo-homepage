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
          <div class="span5">
          	<div class="post-image">
              <?php getAttachedimages('large', '<div class="post-image-holder">', '</div>'); ?>
              </div>
          </div><!-- /.span5 -->
		  <div class="span7">
        	<div class="row content">
 <!-- Masthead
      ================================================== -->
     		  <header class="jumbotron subhead" id="overview">
     		    <h2><?php the_title();?></h2>
     		  </header>
              <?php related_links() ?>
     		  <?php the_content();?>
     		  <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
     		  <?php endwhile; // end of the loop. ?>
     		  <hr />
     		</div>
          </div><!-- /.span7 -->
        </div><!-- /.row -->
     </div><!-- /.container -->
<?php get_footer(); ?>