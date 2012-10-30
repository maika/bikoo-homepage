<?php
/**
 * The template for displaying all posts.
 *
 * Blog Template
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
<div class="row">
  <div class="container">
   <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
   </div><!--/.container -->
   </div><!--/.row -->
   
   <div class="container-fluid">
     <div class="row-fluid">
       <div class="span8">
     <!-- Masthead
      ================================================== -->
         <header class="jumbotron subhead" id="singlehead">
            <h4><?php the_title();?></h4>
         </header>
         <?php related_links()?>
         <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
            <?php the_content();?>
            <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			<?php endwhile; // end of the loop. ?>
		<hr />
		    <?php comments_template(); ?>
       </div>
       <div class="span3">
       
       </div>
     </div>
   </div>
   <?php get_footer(); ?>