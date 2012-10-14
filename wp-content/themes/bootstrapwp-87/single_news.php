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
          <div class="span2">
          	<div class="news-image"> <?php // Checking for a post thumbnail
			  if ( has_post_thumbnail() ) ?>
			  <div class="news-image-holder">
                <?php the_post_thumbnail('medium', array('onload' => "OnImageLoad(event);"));?>
              </div>
            </div>
          </div><!-- /.span5 -->
		  <div class="span10">
        	<div class="row content">
 <!-- Masthead
      ================================================== -->
     		  <header class="jumbotron subhead" id="overview">
     		    <h4><?php the_title();?></h4>
     		  </header>
              <?php related_links() ?>
     		  <?php the_content();?>
     		  <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
     		  <?php endwhile; // end of the loop. ?>
     		</div>
          </div><!-- /.span7 -->
        </div><!-- /.row -->
     </div><!-- /.container -->
     		  <hr />
<?php get_footer(); ?>